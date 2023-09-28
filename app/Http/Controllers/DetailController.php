<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Goutte\Client;
use App\Models\View;
use App\Models\Manga;
use App\Models\Banner;
use App\Models\Rating;
use App\Models\Chapter;
use App\Models\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DetailController extends Controller
{
    public function index($slug)
    {
        $dailyViews     = DB::table('manga')
                            ->select('poster', 'thumbnail', 'title', 'slug', 'genre', DB::raw('sum(if(date(manga_view.created_at) = curdate(), 1, 0)) as today_count'))
                            ->leftJoin('manga_view', 'manga_view.manga_id', '=', 'manga.id')
                            ->orderBy('today_count', 'desc')
                            ->groupBy('manga.id')
                            ->take(10)
                            ->get();
        $weeklyViews    = DB::table('manga')
                            ->select('poster', 'thumbnail', 'title', 'slug', 'genre', DB::raw('sum(if(date(manga_view.created_at) >= curdate() - interval 1 week, 1, 0)) as this_week'))
                            ->leftJoin('manga_view', 'manga_view.manga_id', '=', 'manga.id')
                            ->orderBy('this_week', 'desc')
                            ->groupBy('manga.id')
                            ->take(10)
                            ->get();
        $monthlyViews   = DB::table('manga')
                            ->select('poster', 'thumbnail', 'title', 'slug', 'genre', DB::raw('sum(if(date(manga_view.created_at) >= curdate() - interval 1 month, 1, 0)) as this_month'))
                            ->leftJoin('manga_view', 'manga_view.manga_id', '=', 'manga.id')
                            ->orderBy('this_month', 'desc')
                            ->groupBy('manga.id')
                            ->take(10)
                            ->get();
        $detailManga      = Manga::with('chapters')->where('slug', $slug)->first();
        $genre            = json_decode($detailManga['genre']);
        Session::put('genre',$genre);
        $randomIndex = 0;
        if(!empty($genre)) {
            $randomIndex = array_rand($genre);
        }
        $relatedManga     = Manga::with('chapters')->where('genre', 'like', '%' . (!empty($genre) ? $genre[$randomIndex]->genre : '') . '%')->inRandomOrder()->take(6)->get();
        $rating           = Rating::where('manga_id', $detailManga['id'])->get();
        $setTheme         = \DB::table('web_setting')->join('theme_colors', 'theme_colors.id', '=', 'web_setting.theme_id')->first();
        $bannerAtasMaPop  = Banner::where(['posisi' => 'atas_manga_populer', 'status' => 0])->get();
        $bannerBawahMaPop = Banner::where(['posisi' => 'bawah_manga_populer', 'status' => 0])->get();

        if (count($rating) > 0) {
            $value = 0;
            foreach ($rating as $rate) {
                $value += intval($rate['rating']);
            }
            $ratingValue = number_format((float)($value / count($rating)), 1, '.', '').' / 5';
        }
        else{
            $ratingValue = 'N/A';
        }

        View::create(['manga_id' => $detailManga['id'], 'created_at' => now(), 'updated_at' => now()]);
        return view('detail', compact('dailyViews', 'weeklyViews', 'monthlyViews', 'detailManga', 'relatedManga', 'ratingValue', 'setTheme','bannerAtasMaPop','bannerBawahMaPop'));
    }

    public function rate(Request $request){
        Rating::insert([
            'manga_id' => $request->manga_id,
            'rating' => $request->rating,
            'user_id' => $request->user_id
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Terima kasih atas penilaiannya!',
        ]);
    }

    public function mangajob()
    {
        $startTime = microtime(true);

        // inisialisasi
        $chapters       = [];
        $notifications  = [];
        $client         = new Client();
        $manga          = Manga::select('id', 'domain', 'slug')->with('chapters')->where('is_blacklist', 0)->get();

        // scraping ambil chapter terbaru
        foreach ($manga as $key => $value) {
            $domain[$key]   = $value['domain'];
            $url[$key]      = $value['domain'] . '/manga/' . $value['slug'];
            $node[$key]     = $client->request('GET', $url[$key]);

            $this->information[$key]['manga_id']        = $value['id'];

            if ($value['id'] == $this->information[$key]['manga_id']) {
                if ($domain[$key] == config('constant.url.komikstation')) {
                    $this->information[$key]['chapters']    = $node[$key]->filter('.bixbox ul')->filter('li')->each(function ($li) {
                        $data = [
                            'cp'    => $li->filter('.lchx')->text(),
                            'url'   => parse_url($li->filter('.lchx a')->attr('href'))
                        ];
                        return $data;
                    });
                } else {
                    $this->information[$key]['chapters']    = $node[$key]->filter('.clstyle')->filter('li')->each(function ($li, $i) {
                        if ($i <= 2) {
                            $data = [
                                'cp'    => $li->filter('.chapternum')->text(),
                                'url'   => parse_url($li->filter('a')->attr('href'))
                            ];
                            return $data;
                        }
                    });
                }
            }
            $informations = $this->information;
        }

        return $informations;

        // tampung data chapter baru
        foreach ($informations as $value) {
            foreach ($value['chapters'] as $komik) {
                if (!empty($komik)) {
                    if (Chapter::where('path', $komik['url']['path'])->count() < 1) {
                        $chapters[] = [
                            'manga_id'      => $value['manga_id'],
                            'chapter'       => substr($komik['cp'], 8),
                            'domain'        => $komik['url']['scheme'] . '://' . $komik['url']['host'],
                            'path'          => $komik['url']['path'],
                            'created_at'    => now(),
                            'updated_at'    => now()
                        ];

                        Manga::where('id', $value['manga_id'])->update(['updated_at' => now()]);
                    }
                }
            }
        }

        return $chapters;

        // insert ke database
        DB::table('manga_chapter')->insertOrIgnore($chapters);

        // insert notifikasi
        $newChapter = Chapter::with('manga')->whereDate('created_at', Carbon::today())->get();
        if ($newChapter) {
            foreach ($newChapter as $newChapter) {
                $userBookmark = Bookmark::where('manga_id', $newChapter->manga_id)->get();
                if ($userBookmark) {
                    foreach ($userBookmark as $userBookmark) {
                        $notifications[] = [
                            'thumbnail' => $newChapter->manga->poster,
                            'title' => 'NEW CHAPTER | ' . $newChapter->manga->title . '- chapter ' . str_replace('.0', '', $newChapter->chapter),
                            'url' => $newChapter->path,
                            'is_read' => 0,
                            'user_id' => $userBookmark->user_id,
                            'created_at' => now(),
                            'updated_at' => now()
                        ];
                    }
                }
            }
            if ($notifications) {
                DB::table('notifications')->insertOrIgnore($notifications);
            }
        }

        $endTime = microtime(true);
        $timeDiff = $endTime - $startTime;

        \Log::info("Chapter Update Done -- " . sprintf('%0.2f', $timeDiff) . " detik");
    }
}

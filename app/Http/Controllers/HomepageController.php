<?php

namespace App\Http\Controllers;

use App\Models\Web;
use App\Models\Manga;
use App\Models\Banner;
use App\Models\Rating;
use App\Models\Slider;
use App\Models\Recommend;
use App\Models\Trending;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function index()
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

        $webSetting         = Web::first();

        $latestUpdate       = Manga::with('chapters')->where('is_blacklist', 0)->orderBy('id','desc')->paginate(10);

        //$recommended        = Manga::with('chapters')->inRandomOrder()->take(25)->get();
        $trendings          = Trending::with('manga')->orderBy('urutan')->take(25)->get();
        $recommended        = Recommend::with('manga')->orderBy('urutan')->take(25)->get();
        $sliders            = Slider::with('manga')->orderBy('urutan')->take(25)->get();

        $rating             = Rating::groupBy('manga_id')->get();

        $bannerTengah       = Banner::where(['posisi' => 'Tengah', 'status' => 0])->get();

        $bannerRekomendasi  = Banner::where(['posisi' => 'atas_rekomendasi', 'status' => 0])->get();

        $bannerAtasMaPop    = Banner::where(['posisi' => 'atas_manga_populer', 'status' => 0])->get();

        $bannerBawahMaPop   = Banner::where(['posisi' => 'bawah_manga_populer', 'status' => 0])->get();

        foreach ($latestUpdate as $manga) {
            $genre = json_decode($manga['genre']);
            foreach ($genre as $genre) {
                $arrGenre[] = $genre->genre;
                $fixGenre = array_unique($arrGenre);
            }
        }

        if (count($rating) > 0) {
            $value = 0;
            foreach ($rating as $rate) {
                $value += intval($rate['rating']);
            }
            $ratingValue = number_format((float)($value / count($rating)) * 2, 1, '.', '');
        } else {
            $ratingValue = 'N/A';
        }
        
        if (count($latestUpdate) > 0) {
            return view('homepage', compact('webSetting', 'latestUpdate', 'fixGenre', 'dailyViews', 'weeklyViews', 'monthlyViews','trendings', 'recommended','sliders','ratingValue','bannerTengah','bannerRekomendasi','bannerAtasMaPop','bannerBawahMaPop'));
        }else{
            return view('blank_page');
        }
    }
}

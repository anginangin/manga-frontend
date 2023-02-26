<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use App\Models\Banner;
use Illuminate\Support\Facades\DB;

class AZListController extends Controller
{
    public function index()
    {
        $dailyViews = DB::table('manga')->select('poster', 'thumbnail', 'title', 'slug', 'genre', DB::raw('sum(if(date(manga_view.created_at) = curdate(), 1, 0)) as today_count'))
            ->leftJoin('manga_view', 'manga_view.manga_id', '=', 'manga.id')
            ->orderBy('today_count', 'desc')
            ->groupBy('manga.id')
            ->take(10)
            ->get();

        $weeklyViews = DB::table('manga')->select('poster', 'thumbnail', 'title', 'slug', 'genre', DB::raw('sum(if(date(manga_view.created_at) >= curdate() - interval 1 week, 1, 0)) as this_week'))
            ->leftJoin('manga_view', 'manga_view.manga_id', '=', 'manga.id')
            ->orderBy('this_week', 'desc')
            ->groupBy('manga.id')
            ->take(10)
            ->get();

        $monthlyViews = DB::table('manga')->select('poster', 'thumbnail', 'title', 'slug', 'genre', DB::raw('sum(if(date(manga_view.created_at) >= curdate() - interval 1 month, 1, 0)) as this_month'))
            ->leftJoin('manga_view', 'manga_view.manga_id', '=', 'manga.id')
            ->orderBy('this_month', 'desc')
            ->groupBy('manga.id')
            ->take(10)
            ->get();

        $data = Manga::orderBy('title', 'asc')->paginate(18);
        $bannerAtasMaPop  = Banner::where(['posisi' => 'atas_manga_populer', 'status' => 0])->get();
        $bannerBawahMaPop = Banner::where(['posisi' => 'bawah_manga_populer', 'status' => 0])->get();

        if ($data != []) {
            return view('pages.az_list.az_list', compact('data', 'dailyViews', 'weeklyViews', 'monthlyViews','bannerAtasMaPop','bannerBawahMaPop'));
        }else{
            return view('blank_page');
        }
    }

    public function sortlist($sort)
    {
        $dailyViews = DB::table('manga')->select('poster', 'thumbnail', 'title', 'slug', 'genre', DB::raw('sum(if(date(manga_view.created_at) = curdate(), 1, 0)) as today_count'))
            ->leftJoin('manga_view', 'manga_view.manga_id', '=', 'manga.id')
            ->orderBy('today_count', 'desc')
            ->groupBy('manga.id')
            ->take(10)
            ->get();

        $weeklyViews = DB::table('manga')->select('poster', 'thumbnail', 'title', 'slug', 'genre', DB::raw('sum(if(date(manga_view.created_at) >= curdate() - interval 1 week, 1, 0)) as this_week'))
            ->leftJoin('manga_view', 'manga_view.manga_id', '=', 'manga.id')
            ->orderBy('this_week', 'desc')
            ->groupBy('manga.id')
            ->take(10)
            ->get();

        $monthlyViews = DB::table('manga')->select('poster', 'thumbnail', 'title', 'slug', 'genre', DB::raw('sum(if(date(manga_view.created_at) >= curdate() - interval 1 month, 1, 0)) as this_month'))
            ->leftJoin('manga_view', 'manga_view.manga_id', '=', 'manga.id')
            ->orderBy('this_month', 'desc')
            ->groupBy('manga.id')
            ->take(10)
            ->get();

        $bannerAtasMaPop  = Banner::where(['posisi' => 'atas_manga_populer', 'status' => 0])->get();
        $bannerBawahMaPop = Banner::where(['posisi' => 'bawah_manga_populer', 'status' => 0])->get();
        $data = Manga::where('sort', $sort)->orderBy('title', 'asc')->paginate(18);
        $groups = $data->reduce(function ($carry, $data) {
            $first_letter = $data['sort'][0];
            if (!isset($carry[$first_letter])) {
                $carry[$first_letter] = [];
            }
            $carry[$first_letter][] = $data;
            return $carry;
        }, []);

        if ($data != []) {
            return view('pages.az_list.sortlist', compact('groups', 'data', 'dailyViews', 'weeklyViews', 'monthlyViews','bannerAtasMaPop','bannerBawahMaPop'));
        }else{
            return view('blank_page');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Http\Request;

class MangaListController extends Controller
{
    public function text_mode()
    {
        $data = Manga::select('title', 'genre', 'sort', 'slug')->orderBy('title', 'asc')->get();
        $groups = $data->reduce(function ($carry, $data) {
            $first_letter = $data['sort'];
            if (!isset($carry[$first_letter])) {
                $carry[$first_letter] = [];
            }
            $carry[$first_letter][] = $data;
            return $carry;
        }, []);

        $genres = Manga::select('genre')->get();
        
        if (!$genres->isEmpty()) {
            foreach ($genres as $value) {
                $genre = json_decode($value['genre']);
                foreach ($genre as $item) {
                    $arr[] = $item->genre;
                    $arr_unique = array_unique($arr);
                }
            }
        }else{
            $arr_unique = [];
        }
        
        if (!$data->isEmpty()) {
            return view('pages.manga_list.text_mode', [
                'arr_unique' => $arr_unique,
                'groups' => $groups
            ]);
        }else{
            return view('blank_page');
        }
    }

    public function image_mode()
    {
        $image_mode = Manga::orderBy('id', 'desc')->paginate(10);
        $genres = Manga::select('genre')->get();

        if (!$genres->isEmpty()) {
            foreach ($genres as $value) {
                $genre = json_decode($value['genre']);
                foreach ($genre as $item) {
                    $arr[] = $item->genre;
                    $arr_unique = array_unique($arr);
                }
            }
        }else{
            $arr_unique = [];
        }
        
        if ($image_mode != []) {
            return view('pages.manga_list.image_mode', [
                'arr_unique' => $arr_unique,
                'image_mode' => $image_mode
            ]);
        }else{
            return view('blank_page');
        }
    }

    public function search_manga(Request $request)
    {
        $manga = Manga::where('title', 'LIKE', '%' . $request->keyword . '%')->get();
        $genres = Manga::select('genre')->get();
        foreach ($genres as $key => $value) {
            $genre = json_decode($value['genre']);
            foreach ($genre as $item) {
                $arr[] = $item->genre;
                $arr_unique = array_unique($arr);
            }
        }
        if (!$manga->isEmpty()) {
            return view('pages.manga_list.search', compact('manga', 'arr_unique'));
        }else{
            return view('blank_page');
        }
    }

    public function live_search(Request $request){
        if ($request->ajax()) {
            $output = '';
            $allResult = '';
            $query = $request->get('query');
            if ($query != '') {
                $data = Manga::where('title', 'like', '%' . $query . '%')->get();
                $total_row = $data->count();
                if ($total_row > 0) {
                    foreach ($data->take(5) as $row) {
                        $output .= '
                            <a href="/manga/'.$row->slug.'" class="nav-item">
                                <div class="manga-poster">
                                    <img src="'.$row->poster.'" class="manga-poster-img" alt="'.$row->title.'">
                                </div>
                                <div class="srp-detail">
                                    <h3 class="manga-name mt-2">'.$row->title. '</h3>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        ';
                    }
                    $allResult .= '
                        <a href="/search?keyword='.$query.'" class="nav-item nav-bottom">
                            Lihat Semua Pencarian <i class="fa fa-angle-right ml-2"></i>
                        </a>
                    ';
                } else {
                    $output = '<span class="nav-item text-center">Pencarian tidak ditemukan!</span>';
                }
                $data = array(
                    'result_data'  => $output,
                    'all_result' => $allResult
                );
    
                echo json_encode($data);
            }
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;

class GenreController extends Controller
{
    public function index($genre)
    {
        $manga = Manga::where('genre', 'like', '%' . $genre . '%')->orderBy('id', 'desc')->paginate(16);

        $genres = Manga::select('genre')->get();
        foreach ($genres as $key => $value) {
            $genre = json_decode($value['genre']);
            foreach ($genre as $item) {
                $arr[] = $item->genre;
                $arr_unique = array_unique($arr);
            }
        }
        return view('pages.genre.index', [
            'manga' => $manga,
            'arr_unique' => $arr_unique
        ]);
    }
}

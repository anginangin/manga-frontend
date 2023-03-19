<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SitemapController extends Controller
{
    public function index()
    {
        $latestUpdate       = Manga::with('chapters')
            ->join('manga_chapter', 'manga.id', '=', 'manga_chapter.manga_id')
            ->select('manga.*', DB::raw('MAX(manga_chapter.id) AS latest_chapter'))
            ->groupby('manga_chapter.manga_id')
            ->orderBy('latest_chapter', 'DESC')
            ->paginate(50);
        return response()->view('sitemap', compact('latestUpdate'))->header('Content-Type', 'text/xml');
    }
}

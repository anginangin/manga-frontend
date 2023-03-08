<?php

namespace App\Http\Controllers;

use Goutte\Client;
use App\Models\Manga;
use App\Models\Chapter;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpClient\HttpClient;

class ReadController extends Controller
{
    public function index($slug)
    {
        //$chapterImages  = ImageChapter::join('manga_chapter', 'manga_chapter_image.slug', '=', 'manga_chapter.path')->where('manga_chapter_image.slug', '/' . $slug . '/')->get(['manga_chapter_image.*']);
        $chapter        = Chapter::with('manga')->where('path', '/' . $slug . '/')->first();
        $chapters       = Manga::with(['chapters' => function ($query) {$query->orderByDesc('chapter');}])->where('id', $chapter['manga_id'])->get();
        $mangaPrevNext  = Chapter::where('path', '/' . $slug . '/')->first();
        $nextSlug           = Chapter::where('chapter', '>', $mangaPrevNext->chapter)->where('manga_id', $mangaPrevNext->manga_id)->orderBy('chapter')->first();
        //$nextSlug       = Chapter::select('path')->where(['id' => $next->id])->first();
        //return $nextSlug;
        $prevSlug           = Chapter::where('chapter', '<', $mangaPrevNext->chapter)->where('manga_id', $mangaPrevNext->manga_id)->orderBy('chapter', 'desc')->first();
        //$prevSlug       = Chapter::select('path')->where('id', $prev)->first();

        if ($chapter['domain'] == config('constant.url.komiktap')) {
            try {
                $image = file_get_contents($chapter['domain'] . $chapter['path']);
                $stringArr = explode("<script>", $image);
                $str_start = substr($stringArr[6], 14);
                $str_end = str_replace(");", "", $str_start);
                $str_str = str_replace("/", "", $str_end);
                $str_a = str_replace("{", " ", $str_str);
                $str_b = str_replace("}", " ", $str_a);
                $str_c = str_replace('"', '', $str_b);
                $str_d = str_replace('images:[', '', $str_c);
                $str_e = str_replace(']]', '', $str_d);
                $str_f = str_replace('] ]', '', $str_e);
                $final = explode(",", $str_f);
                $image = $final;
            } catch (\Throwable $th) {
                return view('error_page');
            }
        } else {
            $client = new Client(HttpClient::create(["verify_peer" => false, "verify_host" => false]));
            $url = $chapter['domain'] . $chapter['path'];
            $page = $client->request('GET', $url);
            $this->image['title'] = $page->filter('.headpost h1')->text();
            $this->image['image'] = $page->filter('#readerarea')->filter('img')->each(function ($img) {
                return $img->filter('img')->attr('src');
            });
            $image = $this->image;
        }
        if (Auth::check()) {
            Notification::where(['url' => '/' . $slug . '/', 'user_id' => auth()->user()->id])->update(['is_read' => 1]);
        }
        return view('read', compact('chapter', 'chapters', 'image', 'prevSlug', 'nextSlug'));
    }
}

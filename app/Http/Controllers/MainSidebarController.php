<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Goutte\Client;
use Illuminate\Support\Facades\View as FacadesView;
use Symfony\Component\HttpClient\HttpClient;

class MainSidebarController extends Controller
{
    public function index()
    {
        $client = new Client(HttpClient::create(['verify_peer' => false, 'verify_host' => false]));
        $url = 'https://kiryuu.id';
        $page = $client->request('GET', $url);


        $page->filter('.serieslist.pop.wpop.wpop-weekly li')->each(function ($node, $key) {
            $this->weekly[$key]['poster']   = $node->filter('.ts-post-image.wp-post-image.attachment-medium.size-medium')->attr('src');
            $this->weekly[$key]['title']    = $node->filter('h2')->text();
            $this->weekly[$key]['slug']     = parse_url($node->filter('a')->attr('href'));
            $this->weekly[$key]['rating']   = $node->filter('.numscore')->text();
            $this->weekly[$key]['genres']    = $node->filter('span a')->each(function ($genre) {
                $data = [
                    'genre' => $genre->filter('a')->text()
                ];
                return $data;
            });
        });
        $popular_weekly = $page->filter('.serieslist.pop.wpop.wpop-weekly li')->count() > 0 ? $this->weekly : '';


        $page->filter('.serieslist.pop.wpop.wpop-monthly li')->each(function ($node, $key) {
            $this->monthly[$key]['poster']   = $node->filter('.ts-post-image.wp-post-image.attachment-medium.size-medium')->attr('src');
            $this->monthly[$key]['title']    = $node->filter('h2')->text();
            $this->monthly[$key]['slug']     = parse_url($node->filter('a')->attr('href'));
            $this->monthly[$key]['rating']   = $node->filter('.numscore')->text();
            $this->monthly[$key]['genres']    = $node->filter('span a')->each(function ($genre) {
                $data = [
                    'genre' => $genre->filter('a')->text()
                ];
                return $data;
            });
        });
        $popular_monthly = $page->filter('.serieslist.pop.wpop.wpop-monthly li')->count() > 0 ? $this->monthly : '';


        $page->filter('.serieslist.pop.wpop.wpop-alltime li')->each(function ($node, $key) {
            $this->alltime[$key]['poster']   = $node->filter('.ts-post-image.wp-post-image.attachment-medium.size-medium')->attr('src');
            $this->alltime[$key]['title']    = $node->filter('h2')->text();
            $this->alltime[$key]['slug']     = parse_url($node->filter('a')->attr('href'));
            $this->alltime[$key]['rating']   = $node->filter('.numscore')->text();
            $this->alltime[$key]['genres']    = $node->filter('span a')->each(function ($genre) {
                $data = [
                    'genre' => $genre->filter('a')->text()
                ];
                return $data;
            });
        });
        $popular_alltime = $page->filter('.serieslist.pop.wpop.wpop-alltime li')->count() > 0 ? $this->alltime : '';


        $page->filter('.serieslist li')->each(function ($node, $key) {
            $this->serial[$key]['poster']   = $node->filter('.ts-post-image.wp-post-image.attachment-medium.size-medium')->attr('src');
            $this->serial[$key]['title']    = $node->filter('h2')->text();
            $this->serial[$key]['slug']     = parse_url($node->filter('a')->attr('href'));
            $this->serial[$key]['released'] = $node->filter('span')->last()->text();
            $this->serial[$key]['genres']    = $node->filter('span a')->each(function ($genre) {
                $data = [
                    'genre' => $genre->filter('a')->text()
                ];
                return $data;
            });
        });
        $serial_baru = $page->filter('.serieslist li')->count() > 0 ? $this->serial : '';

        View::composer('includes.main_sidebar', function (\Illuminate\View\View $view) use ($popular_weekly, $popular_monthly, $popular_alltime, $serial_baru) {
            $view->with([
                'popular_weekly'    => $popular_weekly,
                'popular_monthly'   => $popular_monthly,
                'popular_alltime'   => $popular_alltime,
                'serial_baru'       => $serial_baru,
            ]);
        });

        return view('includes.main_sidebar', compact('popular_weekly', 'popular_monthly', 'popular_alltime', 'serial_baru'));
    }
}

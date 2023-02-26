<?php

namespace App\Helpers;

use Goutte\Client;
use App\Models\Manga;

class Scraping
{
    public function autoUpdate()
    {
        $url_target = config('constant.url.kiryuu');
        $id         = Manga::select('id')->orderBy('id', 'desc')->first();
        $data_id    = ($id != null) ? $id['id'] : 0;

        $client     = new Client();
        $page       = $client->request('GET', $url_target);

        $page->filter('.utao')->each(function ($node, $key) {
            $this->result[$key]['slug'] = parse_url($node->filter('a')->attr('href'));
        });
        $results = $this->result;

        foreach (array_slice($results, 9, 32) as $key => $value) {
            $urls[$key]     = $url_target . $value['slug']['path'];
            $slugs_1[$key]  = str_replace("/manga/", "", $value['slug']['path']);
            $slugs_2[$key]  = str_replace("/", "", $slugs_1[$key]);
            $node[$key]     = $client->request('GET', $urls[$key]);

            $this->information[$key]['id']          = $data_id + $key + 1;
            $this->information[$key]['poster']      = $node[$key]->filter('.thumb img')->attr('src');
            $this->information[$key]['title']       = $node[$key]->filter('.seriestucon h1')->text();
            $this->information[$key]['slug']        = $slugs_2[$key];
            $this->information[$key]['description'] = $node[$key]->filter('.seriestuhead')->text();
            $this->information[$key]['table_info']  = $node[$key]->filter('.infotable')->filter('tr')->each(function ($tr) {
                $data = [
                    'key' => $tr->filter('tr td')->eq(0)->text(),
                    'value' => $tr->filter('tr td')->eq(1)->text()
                ];
                return $data;
            });
            $this->information[$key]['genres']      = $node[$key]->filter('.seriestugenre')->filter('a')->each(function ($a) {
                $data = [
                    'genre' => $a->filter('a')->text()
                ];
                return $data;
            });
            $this->information[$key]['chapters']    = $node[$key]->filter('.clstyle')->filter('li')->each(function ($li) {
                $data = [
                    'cp' => $li->filter('.chapternum')->text(),
                    'url' => parse_url($li->filter('a')->attr('href'))
                ];
                return $data;
            });
        }
        $informations = $this->information;

        return $informations;
    }
}

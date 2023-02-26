<?php

namespace App\Jobs;

use Goutte\Client;
use App\Models\Manga;
use Illuminate\Support\Str;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class autoUpdateJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct()
    {
        //
    }

    public function handle()
    {
        $url            = [];
        $client         = new Client();
        $manga          = Manga::select('id', 'poster', 'thumbnail')->with('chapters')->where('thumbnail', null)->get();

        foreach ($manga as $i => $info) {
            foreach ($info['chapters'] as $c => $chapter) {
                $komikUrl[$i][$c]                   =   $chapter['url']['scheme'] . '://' . $chapter['url']['host'] . $chapter['url']['path'];
                $nodes[$i][$c]                      =   $client->request('GET', $komikUrl[$i][$c]);
                $this->upload[$i][$c]['title']      =   $nodes[$i][$c]->filter('.allc a')->text();
                $this->upload[$i][$c]['slug']       =   $chapter['url']['path'];
                $this->upload[$i][$c]['chapter']    =   str_replace('Bahasa Indonesia', '', substr($nodes[$i][$c]->filter('.entry-title')->text(), strpos($nodes[$i][$c]->filter('.entry-title')->text(), 'Chapter')));
                $this->upload[$i][$c]['images']     =   $nodes[$i][$c]->filter('#readerarea')->filter('img')->each(function ($img) {
                                                            $data = ['img_cp' => $img->filter('img')->attr('src')];
                                                            return $data;
                                                        });
                Http::withoutVerifying()->post(config('constant.url.api_image') . 'api/image', [
                    'poster' => $info['poster']
                ]);
                $manga = Manga::find($info['id']);
                $manga->thumbnail = 'storage/images/' . basename($info['poster']);
                $manga->save();
            }
            $komiks = $this->upload;
        }

        foreach ($komiks as $k) {
            foreach ($k as $k2) {
                foreach ($k2['images'] as $k3 => $img) {
                    $url[$k3] = str_replace('\\', '/', $img['img_cp']);
                    Http::withoutVerifying()->post(config('constant.url.api_image') . 'api/image-chapter', [
                        'title' => $k2['title'],
                        'chapter' => $k2['chapter'],
                        'image_url' => $url[$k3]
                    ]);
                    DB::table('manga_chapter_image')->insertOrIgnore([
                        'slug' => $k2['slug'],
                        'image' => 'storage/uploads/' . Str::slug($k2['title'], '-') . '/' . Str::slug($k2['chapter'], '-') . '/' . basename($url[$k3]),
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                }
            }
        }
    }

    // public function handle()
    // {
    //     $startTime = microtime(true);

    //     $url = [];
    //     $mangas = [];
    //     $chapters = [];
    //     $chapter_image = [];
    //     $upload_poster = [];
    //     $upload_image_chapter = [];

    //     $id = Manga::select('id')->orderBy('id', 'desc')->first();
    //     $data_id = ($id != null) ? $id['id'] : 0;

    //     // IGNORE CLOUDFLARE SECURITY
    //     $url = 'https://kiryuu.id';

    //     // SCRAPING
    //     $client = new Client();
    //     $page = $client->request('GET', $url);
    //     $page->filter('.utao')->each(function ($node, $key) {
    //         $this->result[$key]['slug'] = parse_url($node->filter('a')->attr('href'));
    //     });
    //     $results = $this->result;

    //     foreach (array_slice($results, 9, 32) as $key => $value) {
    //         $urls[$key] = $url . $value['slug']['path'];
    //         $slugs_1[$key] = str_replace("/manga/", "", $value['slug']['path']);
    //         $slugs_2[$key] = str_replace("/", "", $slugs_1[$key]);

    //         $node[$key] = $client->request('GET', $urls[$key]);

    //         $this->information[$key]['id'] = $data_id + $key + 1;
    //         $this->information[$key]['poster'] = $node[$key]->filter('.thumb img')->attr('src');
    //         $this->information[$key]['title'] = $node[$key]->filter('.seriestucon h1')->text();
    //         $this->information[$key]['slug'] = $slugs_2[$key];
    //         $this->information[$key]['description'] = $node[$key]->filter('.seriestuhead p')->text();
    //         $this->information[$key]['table_info']    =   $node[$key]->filter('.infotable')->filter('tr')->each(function ($tr) {
    //             $data = [
    //                 'key' => $tr->filter('tr td')->eq(0)->text(),
    //                 'value' => $tr->filter('tr td')->eq(1)->text()
    //             ];
    //             return $data;
    //         });
    //         $this->information[$key]['genres'] = $node[$key]->filter('.seriestugenre')->filter('a')->each(function ($a) {
    //             $data = [
    //                 'genre' => $a->filter('a')->text()
    //             ];
    //             return $data;
    //         });
    //         $this->information[$key]['chapters'] = $node[$key]->filter('.clstyle')->filter('li')->each(function ($li) {
    //             $data = [
    //                 'cp' => $li->filter('.chapternum')->text(),
    //                 'url' => parse_url($li->filter('a')->attr('href'))
    //             ];
    //             return $data;
    //         });
    //     }
    //     $informations = $this->information;

    //     foreach ($informations as $keys => $value) {
    //         foreach ($value['chapters'] as $taibabi => $komik) {
    //             $komikUrl[$keys][$taibabi] = $komik['url']['scheme'] . '://' . $komik['url']['host'] . $komik['url']['path'];
    //             $nodes[$keys][$taibabi] = $client->request('GET', $komikUrl[$keys][$taibabi]);

    //             $this->upload[$keys][$taibabi]['title'] = $nodes[$keys][$taibabi]->filter('.allc a')->text();
    //             $this->upload[$keys][$taibabi]['slug'] = $komik['url']['path'];
    //             $this->upload[$keys][$taibabi]['chapter'] = str_replace('Bahasa Indonesia', '', substr($nodes[$keys][$taibabi]->filter('.entry-title')->text(), strpos($nodes[$keys][$taibabi]->filter('.entry-title')->text(), 'Chapter')));
    //             $this->upload[$keys][$taibabi]['images'] = $nodes[$keys][$taibabi]->filter('#readerarea')->filter('img')->each(function ($img) {
    //                 $data = [
    //                     'img_cp' => $img->filter('img')->attr('src')
    //                 ];
    //                 return $data;
    //             });

    //             $alphabet = mb_substr($value['title'], 0, 1);
    //             $isNumeric = preg_match('/^[0-9]+$/', mb_substr($value['title'], 0, 1));
    //             $isAlphabet = preg_match('/^[A-Z]+$/', mb_substr($value['title'], 0, 1));

    //             if ($isNumeric) {
    //                 $sort = "0-9";
    //             } elseif ($isAlphabet) {
    //                 $sort = $alphabet;
    //             } else {
    //                 $sort = "other";
    //             }

    //             $upload_poster[] = ['poster' => $value['poster']];

    //             $mangas[] = [
    //                 'id' => $value['id'],
    //                 'poster' => 'storage/images/' . basename($value['poster']),
    //                 'title' => $value['title'],
    //                 'slug' => $value['slug'],
    //                 'description' => $value['description'],
    //                 'information' => json_encode($value['table_info']),
    //                 'genre' => json_encode($value['genres']),
    //                 'sort' => $sort,
    //                 'created_at' => now(),
    //                 'updated_at' => now()
    //             ];

    //             $chapters[] = [
    //                 'manga_id' => $value['id'],
    //                 'chapter' => $komik['cp'],
    //                 'domain' => $komik['url']['scheme'] . '://' . $komik['url']['host'],
    //                 'path' => $komik['url']['path'],
    //                 'created_at' => now(),
    //                 'updated_at' => now()
    //             ];
    //         }
    //         $komiks = $this->upload;
    //     }

    //     foreach ($komiks as $kontol) {
    //         foreach ($kontol as $kontol2) {
    //             foreach ($kontol2['images'] as $babi3 => $kontol3) {
    //                 $url[$babi3] = str_replace('\\', '/', $kontol3['img_cp']);
    //                 $upload_image_chapter[] = [
    //                     'title' => $kontol2['title'],
    //                     'chapter' => $kontol2['chapter'],
    //                     'image_url' => $url[$babi3]
    //                 ];
    //                 $chapter_image[] = [
    //                     'slug' => $kontol2['slug'],
    //                     'image' => 'storage/uploads/' . Str::slug($kontol2['title'], '-') . '/' . Str::slug($kontol2['chapter'], '-') . '/' . basename($url[$babi3]),
    //                     'created_at' => now(),
    //                     'updated_at' => now()
    //                 ];
    //             }
    //         }
    //     }

    //     Http::withoutVerifying()->post(config('constant.url.api_image') . 'api/image', [
    //         'data' => $upload_poster
    //     ]);
    //     Http::withoutVerifying()->post(config('constant.url.api_image') . 'api/image-chapter', [
    //         'data' => $upload_image_chapter
    //     ]);
    //     DB::table('manga')->insertOrIgnore($mangas);
    //     DB::table('manga_chapter')->insertOrIgnore($chapters);
    //     foreach (array_chunk($chapter_image, 1000) as $t) {
    //         DB::table('manga_chapter_image')->insertOrIgnore($t);
    //     }
    //     $endTime = microtime(true);
    //     $timeDiff = $endTime - $startTime;

    //     \Log::info("Auto Update Done " . sprintf('%0.2f', $timeDiff) . " detik");
    // }
}

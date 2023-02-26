<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Goutte\Client;
use App\Models\Manga;
use App\Models\Chapter;
use App\Models\Bookmark;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UpdateChapterCron extends Command
{
    protected $signature = 'updatechapter:cron';
    protected $description = 'Cronjob update chapter manga';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
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
                    $this->information[$key]['chapters']    = $node[$key]->filter('.bixbox ul')->filter('li')->each(function ($li, $i) {
                        if ($i <= 2) {
                            $data = [
                                'cp'    => $li->filter('.lchx')->text(),
                                'url'   => parse_url($li->filter('.lchx a')->attr('href'))
                            ];
                            return $data;
                        }
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

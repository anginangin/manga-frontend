<?php

namespace App\Console\Commands;

use App\Helpers\Scraping;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class RilisanTerbaruCron extends Command
{
    protected $signature = 'rilisanterbaru:cron';
    protected $description = 'Cronjob auto update rilisan terbaru homepage kiryuu';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $startTime = microtime(true);

        $mangas         = [];
        $chapters       = [];
        $auto_update    = new Scraping;
        $url_target     = config('constant.url.kiryuu');

        foreach ($auto_update->autoUpdate() as $value) {
            foreach ($value['chapters'] as $komik) {

                $alphabet   = mb_substr($value['title'], 0, 1);
                $isNumeric  = preg_match('/^[0-9]+$/', mb_substr($value['title'], 0, 1));
                $isAlphabet = preg_match('/^[A-Z]+$/', mb_substr($value['title'], 0, 1));
                $sort       = ($isNumeric) ? '0-9' : (($isAlphabet) ? $alphabet : 'other');

                $mangas[] = [
                    'id'            => $value['id'],
                    'poster'        => str_replace('https://','https://i2.wp.com/', $value['poster']),
                    'title'         => str_replace('Bahasa Indonesia','', $value['title']),
                    'domain'        => $url_target,
                    'slug'          => $value['slug'],
                    'description'   => $value['description'],
                    'information'   => json_encode($value['table_info']),
                    'genre'         => json_encode($value['genres']),
                    'sort'          => $sort,
                    'created_at'    => now(),
                    'updated_at'    => now()
                ];

                $chapters[] = [
                    'manga_id'      => $value['id'],
                    'chapter'       => substr($komik['cp'],8),
                    'domain'        => $komik['url']['scheme'] . '://' . $komik['url']['host'],
                    'path'          => $komik['url']['path'],
                    'created_at'    => now(),
                    'updated_at'    => now()
                ];
            }
        }

        DB::table('manga')->insertOrIgnore($mangas);
        DB::table('manga_chapter')->insertOrIgnore($chapters);

        $endTime = microtime(true);
        $timeDiff = $endTime - $startTime;

        \Log::info("Auto Update Done -- " . sprintf('%0.2f', $timeDiff) . " detik");
    }
}

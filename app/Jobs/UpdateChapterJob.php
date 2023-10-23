<?php

namespace App\Jobs;

use Carbon\Carbon;
use Goutte\Client;
use App\Models\Manga;
use App\Models\Chapter;
use App\Models\Bookmark;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Symfony\Component\Process\Process;
class UpdateChapterJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $mangaName, $information;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($mangaName)
    {
        $this->mangaName = $mangaName;
        $this->information;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
      try {
        $mangaName = $this->mangaName;

        // Log::info('START UPDATE CHAPTER - ' . strtoupper($mangaName));
        $startTime = microtime(true);

        // inisialisasi
        $chapters       = [];
        $notifications  = [];
        $client         = new Client();
        $manga          = Manga::select('id', 'domain', 'slug')->where(['title' => $mangaName, 'is_blacklist' => 0])->limit(1)->get();
        // scraping ambil chapter terbaru
        foreach ($manga as $key => $value) {
            $domain[$key]   = $value['domain'];
            $url[$key]      = $value['domain'] . '/manga/' . $value['slug'];
            $node[$key]     = $client->request('GET', $url[$key]);
            $this->information[$key]['manga_id']        = $value['id'];
            if ($value['id'] == $this->information[$key]['manga_id']) {
                // if ($domain[$key] == config('constant.url.komikstation')) {
                //     if ($node[$key]->filter('.bixbox ul')->filter('li')->count() > 0) {
                //         $this->information[$key]['chapters']    = $node[$key]->filter('.bixbox ul')->filter('li')->each(function ($li, $i) {
                //             if ($i <= 2) {
                //                 $data = [
                //                     'cp'    => $li->filter('.lchx')->text(),
                //                     'url'   => parse_url($li->filter('.lchx a')->attr('href'))
                //                 ];
                //                 return $data;
                //             }
                //         });
                //     }
                // } else {
                // $this->information[$key]['chapters']    = $node[$key]->filter('.clstyle')->filter('li')->each(function ($li, $i) {
                //     if ($i <= 2) {
                //         $data = [
                //             'cp'    => $li->filter('.chapternum')->text(),
                //             'url'   => parse_url($li->filter('a')->attr('href'))
                //         ];
                //         return $data;
                //     }
                // });
                // }

                if ($domain[$key] == config('constant.url.komiktap') || $domain[$key] == 'https://komiktap.me') {
                     // new with pupetter
                    $process = new Process(['node', config('constant.path.puppeteer'), $url[$key]]);
                    $process->run();

                    if (!$process->isSuccessful()) {
                        throw new \RuntimeException($process->getErrorOutput());
                    }

                    $output = $process->getOutput();
                    $output = json_decode($output);
                    $output = $output->data;
                    $this->information[$key]['chapters'] = [];
                    foreach($output as $value) {
                        $this->information[$key]['chapters'][] = [
                            'cp' => $value->cp,
                            'url' => parse_url($value->url)
                        ];
                    }
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

        // Log::info("Chapter Update Done -- " . sprintf('%0.2f', $timeDiff) . " detik - " . $mangaName);
      } catch(\Exception $e) {
            Log::info("Update Chapter Failed: ". $e);
      }
    }
}

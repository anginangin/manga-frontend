<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{

    protected $commands = [
        Commands\RilisanTerbaruCron::class,
        Commands\UpdateChapterCron::class
        //Commands\UploadImageCron::class
    ];

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('rilisanterbaru:cron')->everyFiveMinutes();
        $schedule->command('updatechapter:cron')->everyTenMinutes();
        //$schedule->command('uploadimage:cron')->everyMinute();
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

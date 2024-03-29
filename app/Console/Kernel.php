<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        'App\Console\Commands\ClearJobs',
        'App\Console\Commands\SendNewletter',
        'App\Console\Commands\ClearExpired',
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->command('clear:jobs')
        ->dailyAt('19:00');

        $schedule->command('send:newsletter')
        ->weeklyOn(5, '3:00');

        $schedule->command('clear:expired')
        ->dailyAt('19:00');

        $schedule->command('generate:sitemap')
        ->twiceDaily(7, 19);
        
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

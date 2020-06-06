<?php

namespace App\Console\Commands;

use App\Job;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ClearJobs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'command:name';
    protected $signature = 'clear:jobs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Removes records of all jobs older than 45 days';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     parent::__construct();
    // }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $jobs  = Job::where('created_at', '<', Carbon::now()->subDays(45)->toDateTimeString())->delete();
      dd('jobs successfully cleared');
    }
}

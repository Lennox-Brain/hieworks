<?php

namespace App\Console\Commands;

use App\Job;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ClearExpired extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:expired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'clears jobs that have meet deadline';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Job::where('job_deadline', '<', Carbon::now())->each(function ($item) {
            $item->delete();
          });
          dd('expired jobs cleared');
    }
}

<?php

namespace App\Console\Commands;

use App\Job;
use App\Mail\Newsletter as MailNewsletter;
use App\Newsletter;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendNewletter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:newsletter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send newsletter to subscribed users';

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
        $subscribers = Newsletter::where('status', true)
                    ->pluck('email');

        $jobs = Job::where('status', true)
                    ->orderBy('created_at', 'DESC')
                    ->take(4)
                    ->get(['id', 'job_title', 'job_location','job_category', 'job_type'])
                    ->toArray();

        
          Mail::to($subscribers)->send( new MailNewsletter($jobs));   
          echo 'newsletters sent';
      

    }
}

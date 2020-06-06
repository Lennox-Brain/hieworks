<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationMail extends Mailable
{
    use Queueable, SerializesModels;
    private $link;
    private $job_title; 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($link, $job_title)
    {
        $this->link = $link;
        $this->job_title = $job_title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('MAIL_FROM_ADDRESS', 'no-reply@hieworks.com'))
        ->subject('New Job Application')
        ->view('mails.newapplication', ['link' =>$this->link, 'job_title' => $this->job_title]);
    
    }

}

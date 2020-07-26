<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Newsletter extends Mailable
{
    use Queueable, SerializesModels;
    private $jobs;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($jobs)
    {
        $this->jobs =  $jobs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->subject('Hieworks Jobs Alert')
        ->from('no-reply@hieworks.com')
        ->view('mails.newsletter', ['jobs' => $this->jobs]);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $email, $content;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email1, $content1)
    {
        $this->email = $email1;
        $this->content = $content1;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contact_us');
    }
}

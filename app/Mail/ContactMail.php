<?php

use Illuminate\Mail\Mailable;

class ContactMail extends Mailable
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('New Contact Form Submission')
            ->view('emails.contact');
    }
}

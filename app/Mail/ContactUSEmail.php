<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactUSEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;

    }

    public function envelope(): Envelope
    {
        return new Envelope(
            to: env('MAIL_TO_ADDRESS'),
            subject: $this->data['subject'],
            from: new Address($this->data['email'], $this->data['name']),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.contactus',
            with:[
                'data' => $this->data
            ]
        );
    }
}

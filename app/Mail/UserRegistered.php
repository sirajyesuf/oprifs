<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserRegistered extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $temporaryPassword;

    public function __construct($user,$temporaryPassword)
    {
        $this->user = $user;
        $this->temporaryPassword = $temporaryPassword;
    }

   
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your Login Credentials for OPRIFS Website Admin Portal',
        );
    }

  
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.user_registered',
            with:[

                'name' => $this->user->name,
                'email' => $this->user->email,
                'password' => $this->user->password
            ]
        );
    }


}

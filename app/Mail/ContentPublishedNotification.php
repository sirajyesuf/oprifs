<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContentPublishedNotification extends Mailable
{
    use Queueable, SerializesModels;

    protected $news;

    public function __construct($news)
    {
        $this->news = $news;
    }


    public function envelope(): Envelope
    {
        return new Envelope(
            
            subject: 'New Content Published.',
            from:env('MAIL_FROM_ADDRESS')
        );
    }


    public function content(): Content
    {
        return new Content(
            markdown: 'emails.content_published_notification',
            with:[
                'content_detail_url' => url(route('content_detail',['slug' => $this->news->slug])),
                ''
            ]
        );
    }
}

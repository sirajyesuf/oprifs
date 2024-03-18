<?php

namespace App\Observers;

use App\Models\News;
use App\Models\NewsLetterSubscriber;
use App\Mail\ContentPublishedNotification;
use Illuminate\Support\Facades\Mail;

class NewsObserver
{
    public function created(News $news): void
    {
        foreach(NewsLetterSubscriber::all() as $subscriber){
            Mail::to($subscriber->email)->send(new ContentPublishedNotification($news));
        }
    }


    public function updated(News $news): void
    {
        //
    }


    public function deleted(News $news): void
    {
        //
    }


    public function restored(News $news): void
    {
        //
    }

    public function forceDeleted(News $news): void
    {
        //
    }
}

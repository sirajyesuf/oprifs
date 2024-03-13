<?php

namespace App\Livewire;

use Livewire\Component;
use  Illuminate\Support\Facades\DB;

class NewsDetailPage extends Component
{
    public $content;

    public function mount($slug){

        $this->content = DB::table('news_and_stories')->where('slug',$slug)->first();
    }

    public function render()
    {

        return view('livewire.news-detail-page')
        ->with([
            'content' => $this->content
        ]);
    }
}

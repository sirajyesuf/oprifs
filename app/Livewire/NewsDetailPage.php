<?php

namespace App\Livewire;

use App\Models\News;
use App\Models\Story;
use Livewire\Component;
use  Illuminate\Support\Facades\DB;

class NewsDetailPage extends Component
{
    public $content;

    public function mount($slug){

        $this->content = News::where('slug',$slug)->first();

        if ($this->content == null) {

            $this->content = Story::where('slug',$slug)->firstOrFail();
        }
        

    }

    public function render()
    {

        return view('livewire.news-detail-page')
        ->with([
            'content' => $this->content
        ]);
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\News;
use App\Enums\PostType;
class NewsPage extends Component
{
    public $amount = 6;

    public $categories = [ 

        [   "id"  =>1,
            "name" => "News",
            "status" => true
        ],
        [
            "id" => 2,
            "name" => "Stories",
            "status" => false
        ]
    ];

    public function updateCategory($categoryId) {


        foreach($this->categories as $category) {

            if ($category['id'] == $categoryId){
                $category['status'] = true;
            }
            $category['status'] = false;
        }
    }

    public function render()
    {
        return view('livewire.news-page')
        ->with([
            'categories' => $this->categories,
        ]);
    }
}

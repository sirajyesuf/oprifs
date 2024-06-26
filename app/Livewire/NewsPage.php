<?php

namespace App\Livewire;

use App\Models\News;
use App\Models\Story;
use App\Models\Youtube;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Title;

class NewsPage extends Component
{
    public $amount = 3;

    public $activeCategoryID = 1;

    public $categories = [

        [   'id' => 1,
            'name' => 'News',
            'status' => true,
        ],
        [
            'id' => 2,
            'name' => 'Stories',
            'status' => false,
        ],
        [
            'id' => 3,
            'name' => 'Youtube',
            'status' => false,
        ]
    ];


    public function loadMoreContent(){
        $this->amount = $this->amount + 3;
    }


    public function getActiveCategory(){

        foreach ($this->categories as $category) {

            if ($category['status']) {

                if(str::lower($category['name']) == "news") {

                    return "news";
                }

                else {

                    return "story";
                }

            }

        }

    }

    public function getActiveCategoryID(){

        foreach ($this->categories as $category) {

            if ($category['status']) {
                return $category['id'];
            }

        }

    }

    public function updateCategory($categoryId)
    {
        
        $categories = array();

        foreach ($this->categories as $category) {

            if ($category['id'] == $categoryId) {
                $category['status'] = true;

            }
            else {

                $category['status'] = false;
            }

            array_push($categories,$category);

        }

        $this->categories = $categories;       
    }

    public function getTrendingContent(){

        return $this->getTrendingNews() ?? $this->getTrendingStory();
    }

    protected function getTrendingNews(){

        $newsWithMaxViews = News::where('views', News::max('views'))->get();

        if ($newsWithMaxViews->count() == 1) {

            return $newsWithMaxViews->first();
        }
        else {
            
            return News::inRandomOrder()->first();
        }
    }

    protected function getTrendingStory(){

        $newsWithMaxViews = Story::where('views', News::max('views'))->get();

        if ($newsWithMaxViews->count() == 1) {

            return $newsWithMaxViews->first();
        }
        else {
            
            return Story::inRandomOrder()->first();
        }
    }

    public function getContent(){

        $activeCategoryID = $this->getActiveCategoryID();

        if($activeCategoryID == 1){
            
            return News::latest()->paginate($this->amount);
        }

        elseif($activeCategoryID == 2) {
            
            return Story::latest()->paginate($this->amount);
        }

        elseif ($activeCategoryID == 3){

            return Youtube::latest()->paginate($this->amount);

        }
    }




    #[Title('news-oprifs')]
    public function render()
    {
        return view('livewire.news-page')
            ->with([
                'categories' => $this->categories,
                'contents'  => $this->getContent(),
                'trendingContent' => $this->getTrendingContent(),
            ]);
    }
}

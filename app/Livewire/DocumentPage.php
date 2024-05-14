<?php

namespace App\Livewire;

use App\Models\Document;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\DB;

class DocumentPage extends Component
{

    use WithPagination;

    private $amount = 3;

    public $search = '';


    public $categories = array();

    protected function setupCategory(){
       
        
        foreach(DB::table('resource_category')->get() as $category){

            array_push($this->categories,[
                'id' => $category->id,
                'title' => $category->title,
                'status' => false
            ]);
        }
    }

    protected function getActiveCategories(){

        $activeCategories = array();

        foreach ($this->categories as $category) {

            if ($category['status']) {

                array_push($activeCategories,$category['title']);

            }

        }


        return $activeCategories;

    }


    public function mount(){

        $this->setupCategory();

    }

    public function loadMoreDocuments(){
        $this->amount = $this->amount + 3;
    }


    #[Title('resources-oprifs')]
    public function render()
    {    

        return view('livewire.document-page',[
            'documents' => $this->getResources()
        ]);
    }

    public function updateCategory($categoryID){

        $categories = array();

        foreach($this->categories as $category){

            if($category['id'] == $categoryID){

                $category['status'] = !$category['status'];
            }

            array_push($categories,$category);
        }

        $this->categories = $categories;
    }

    public function getResources(){

        $search = $this->search;
        $activeCategories = $this->getActiveCategories();
        $query = Document::query();

        if($search){

            $query->where('name', 'like', '%' . $this->search . '%');

        }

        if($activeCategories){

            $query->whereIn('category',$this->getActiveCategories());
        }


        return $query->take($this->amount)->get();

    }
}

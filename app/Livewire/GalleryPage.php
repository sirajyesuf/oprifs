<?php

namespace App\Livewire;

use App\Models\Gallery;
use Livewire\Component;
use Livewire\WithPagination;

class GalleryPage extends Component
{
    use WithPagination;


    public  $paginationLength;

    public function mount(){

        $this->paginationLength = ceil(Gallery::count() / 3);

    }

    public function render()
    {
        return view('livewire.gallery-page')
            ->with([
                'galleries' => Gallery::simplePaginate(3),
                'paginationLength' => $this->paginationLength
            ]);
    }


}

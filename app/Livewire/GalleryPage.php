<?php

namespace App\Livewire;

use App\Models\Gallery;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class GalleryPage extends Component
{
    use WithPagination;


    public  $paginationLength;

    public function mount(){

        $this->paginationLength = ceil(Gallery::count() / 9);

    }

    #[Title('gallery-oprifs')]
    public function render()
    {
        return view('livewire.gallery-page')
            ->with([
                'galleries' => Gallery::simplePaginate(9),
                'paginationLength' => $this->paginationLength
            ]);
    }


}

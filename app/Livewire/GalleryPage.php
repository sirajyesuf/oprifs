<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Gallery;

class GalleryPage extends Component
{
    public function render()
    {
        return view('livewire.gallery-page')
        ->with([
            'galleries'   => Gallery::paginate(8)
        ]);;
    }
}

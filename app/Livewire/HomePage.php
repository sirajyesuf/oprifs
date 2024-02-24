<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Testimonial;
use Livewire\WithPagination;
use App\Models\Gallery;

class HomePage extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.home-page')
        ->with([
            'testimonials' => Testimonial::paginate(2),
            'galleries'   => Gallery::get()
        ]);
    }
}

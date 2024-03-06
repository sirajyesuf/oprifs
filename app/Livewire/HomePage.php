<?php

namespace App\Livewire;

use App\Models\Gallery;
use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithPagination;

class HomePage extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.home-page')
            ->with([
                'testimonials' => Testimonial::paginate(2),
                'galleries' => Gallery::take(5)->get(),
            ]);
    }
}

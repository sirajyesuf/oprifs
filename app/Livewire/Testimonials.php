<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Testimonial;
use Livewire\WithPagination;

class Testimonials extends Component
{
    use WithPagination;

    public $testimonials;
    

    public function render()
    {
        return view('livewire.testimonials')
        ->with(
            [
                'testimonials' => Testimonial::paginate(2)
            ]);
    }
}

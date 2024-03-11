<?php

namespace App\Livewire;

use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\Volunteer;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

class HomePage extends Component
{
    use WithPagination;

    #[Validate('required')]
    public $name = '';

    #[Validate('required', 'email')]
    public $email = '';

    #[Validate('required')]
    public $phonenumber = '';

    #[Validate('required')]
    public $message = '';

    public function save()
    {

        $this->validate();

        Volunteer::create(
            $this->only(['name', 'email', 'phonenumber', 'message']),
        );

        return redirect()->back()->with('status', 'Post successfully created.');

    }

    public function render()
    {
        return view('livewire.home-page')
            ->with([
                'testimonials' => Testimonial::paginate(2),
                'galleries' => Gallery::take(5)->get(),
            ]);
    }
}

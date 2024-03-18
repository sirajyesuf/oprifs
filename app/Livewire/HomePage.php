<?php

namespace App\Livewire;

use App\Models\Gallery;
use App\Models\NewsLetterSubscriber;
use App\Models\Program;
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

    #[Validate('required|unique:news_letter_subscribers,email')]
    public $email_address  = '';

    public function save()
    {

        $this->validate();

        Volunteer::create(
            $this->only(['name', 'email', 'phonenumber', 'message']),
        );

        return redirect()->back()->with('status', 'Post successfully created.');

    }


    public function subscribeToNewsLetter(){

        $this->validate();

        NewsLetterSubscriber::create([
            'email' => $this->email_address,
        ]);

        return redirect()->back()->with('status', 'You have successfully subscribed to our newsletter. Thank you!');
    
    }

    public function render()
    {
        return view('livewire.home-page')
            ->with([
                'testimonials' => Testimonial::paginate(2),
                'galleries' => Gallery::take(5)->get(),
                'programs' => Program::all()
            ]);
    }
}

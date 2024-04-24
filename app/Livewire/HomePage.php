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
use App\Models\OurVolunteer;
use Livewire\Attributes\Title;

class HomePage extends Component
{
    use WithPagination;

    #[Validate('required|string|max:255')]
    public $name = '';

    #[Validate('required|email|unique:volunters')]
    public $email = '';

    #[Validate('required|string|max:255')]
    public $message = '';

    #[Validate('required|unique:news_letter_subscribers,email')]
    public $email_address  = '';

    public function becomeAVolunteer()
    {

        $this->validate();

        Volunteer::create(
            $this->only(['name', 'email', 'message']),
        );

        return redirect()->back()->with('volunteer_status', 'we will reach out to you soon via your email address.');

    }


    public function subscribeToNewsLetter(){

        $this->validate();

        NewsLetterSubscriber::create([
            'email' => $this->email_address,
        ]);

        return redirect()->back()->with('status', 'You have successfully subscribed to our newsletter. Thank you!');
    
    }

    #[Title('home-oprifs')] 
    public function render()
    {

        return view('livewire.home-page')
            ->with([
                'volunteers' => OurVolunteer::take(3)->get(),
                'testimonials' => Testimonial::paginate(2),
                'galleries' => Gallery::take(5)->get(),
                'programs' => Program::all(),
            ]);
    }
}

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

    public $name = '';

    public $email = '';

    public $message = '';

    public $email_address  = '';

    public function becomeAVolunteer()
    {

        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:255'
        ]);

        Volunteer::create($validated);

        return redirect()->back()->with('volunteer_status', 'we will reach out to you soon via your email address.');

    }


    public function subscribeToNewsLetter(){

        $validated = $this->validate([
            'email_address' => 'required|email|unique:news_letter_subscribers,email',
        ]);

        NewsLetterSubscriber::create([
            'email' => $validated['email_address']
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

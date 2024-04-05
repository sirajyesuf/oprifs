<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Mail\ContactUSEmail;
class ContactUs extends Component
{
    #[Validate('required|string|max:255')]
    public $firstname = '';

    #[Validate('required|string|max:255')]
    public $lastname = '';

    #[Validate('required|string|max:255')]
    public $subject = '';

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required|string')]
    public $message = '';

    public function render()
    {
        return view('livewire.contact-us');
    }

    public function sendEmail(){

        $this->validate();


        $this->firstname = '';
        $this->lastname = '';
        $this->subject = '';
        $this->email = '';
        $this->message = '';

        return redirect()->back()->with('contactus_status', 'thank you. we will reach out to you soon via your email address.');


    }
}

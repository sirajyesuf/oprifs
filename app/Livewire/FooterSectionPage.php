<?php

namespace App\Livewire;

use App\Models\ContactUs;
use Livewire\Component;

class FooterSectionPage extends Component
{
    public function render()
    {
        return view('components.footersection',[
            'contactus' => ContactUs::first()
        ]);
    }
}

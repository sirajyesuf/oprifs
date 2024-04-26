<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactUs;

class HeaderSectionPage extends Component
{
    public function render()
    {
        return view('components.headersection',[
            'contactus' => ContactUs::first()
        ]);
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Setting;

class FooterSectionPage extends Component
{
    public function render()
    {
        return view('components.footersection',[
            'contactus' => Setting::getContactus()
        ]);
    }
}

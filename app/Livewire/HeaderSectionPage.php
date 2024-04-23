<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Setting;


class HeaderSectionPage extends Component
{
    public function render()
    {
        return view('components.headersection',[
            'contactus' => Setting::getContactus()
        ]);
    }
}

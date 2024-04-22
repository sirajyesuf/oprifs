<?php

namespace App\Livewire;

use App\Models\Setting;
use Livewire\Component;

class AboutUsPage extends Component
{
    public function render()
    {
        return view('livewire.about-us-page',[
            'aboutus' => Setting::whereNotNull('aboutus')
            ->whereNotNull('mission')
            ->whereNotNull('vission')->first()
        ]);
    }
}


<?php

namespace App\Livewire;

use App\Models\Setting;
use Livewire\Component;
use Livewire\Attributes\Title;

class AboutUsPage extends Component
{
    #[Title('aboutus-oprifs')]
    public function render()
    {
        return view('livewire.about-us-page',[
            'aboutus' => Setting::whereNotNull('aboutus')
            ->whereNotNull('mission')
            ->whereNotNull('vission')->first(),
        ]);
    }
}


<?php

namespace App\Livewire;

use App\Models\AboutUs;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Staff;

class AboutUsPage extends Component
{
    #[Title("aboutus-oprifs")]
    public function render()
    {
        $staffs = Staff::all()->toArray();
        return view("livewire.about-us-page", [
            "aboutus" => AboutUs::first(),
            "staffs" => $staffs,
        ]);
    }
}

<?php

namespace App\Livewire;

use App\Models\AboutUs;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Staff;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AboutUsPage extends Component
{

    #[Title("aboutus-oprifs")]
    public function render()
    {
        
        $board_members = Staff::where('category',Staff::BOARD_MEMBER)->get()->toArray();
        $management_members = Staff::where('category',Staff::MANAGEMENT_MEMBER)->get()->toArray();


        return view("livewire.about-us-page", [
            "aboutus" => AboutUs::first(),
            "board_members" => $board_members,
            'management_members' => $management_members
        ]);
    }
}

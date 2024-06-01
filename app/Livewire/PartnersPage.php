<?php

namespace App\Livewire;

use App\Enums\PartnerType;
use App\Enums\ProjectType;
use App\Models\Partner;
use Livewire\Component;

class PartnersPage extends Component
{
    public function render()
    {
        return view('livewire.partners-page',[
            'donorpartners' => Partner::oftype(PartnerType::DONORPARTNER->value)->get(),
            'govtpartners'  => Partner::oftype(PartnerType::GOVERMENTDEVELOPMENTPARTNER->value)->get()
        ]);
    }
}

<?php

namespace App\Livewire;

use App\Enums\PartnerType;
use App\Models\Partner;
use Livewire\Component;
use Livewire\Attributes\Title;

class PartnersPage extends Component
{
    #[Title('partners-oprifs')]
    public function render()
    {
        return view('livewire.partners-page',[
            'donorpartners' => Partner::oftype(PartnerType::DONORPARTNER->value)->get(),
            'govtpartners'  => Partner::oftype(PartnerType::GOVERMENTDEVELOPMENTPARTNER->value)->get()
        ]);
    }
}

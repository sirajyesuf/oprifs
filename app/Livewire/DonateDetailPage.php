<?php

namespace App\Livewire;

use App\Models\Bank;
use App\Models\Cause;
use Livewire\Component;

class DonateDetailPage extends Component
{

    public $cause;

    public function mount($slug){

        $this->cause = Cause::where('slug',$slug)->firstOrFail();

    }

    public function render()
    {
        return view('livewire.donate-detail-page',[
            'cause' => $this->cause,
            'banks' => Bank::all()
        ]);
    }
}

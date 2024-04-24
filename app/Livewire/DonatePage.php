<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cause;
use Livewire\Attributes\Title;


class DonatePage extends Component
{

    #[Title('donate-oprifs')]
    public function render()
    {

        return view('livewire.donate-page',[
            'causes' => Cause::all()
        ]);
    }
}

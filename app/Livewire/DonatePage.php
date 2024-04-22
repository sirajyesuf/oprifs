<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cause;


class DonatePage extends Component
{
    public function render()
    {

        return view('livewire.donate-page',[
            'causes' => Cause::all()
        ]);
    }
}

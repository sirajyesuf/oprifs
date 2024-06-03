<?php

namespace App\Livewire;

use App\Models\Program;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;


class ProgramsPage extends Component
{
    use WithPagination;

    public $amount = 3;

    public $totalPrograms;

    public function mount(){

        $this->totalPrograms = Program::count();
    }

    public function getPrograms(){

        $query = Program::query();

        return $query->latest()->take($this->amount)->get();

    }

    public function loadMorePrograms(){

        $this->amount = $this->amount + 3;
    }


    #[Title('programs-oprifs')]
    public function render()
    {
        return view('livewire.programs-page',[
            'programs' => $this->getPrograms()
        ]);
    }
}

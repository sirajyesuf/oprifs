<?php

namespace App\Livewire;

use App\Models\Volunter;
use Livewire\Component;

class VolunterPage extends Component
{
    public $name = '';

    public $email = '';

    public $message = '';

    public function save()
    {

        $validated = $this->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        Volunter::create($validated);

        return redirect()->to('/volunter')
            ->with([

                'success' => 'we will reach out to soon via your email address.',

            ]);

    }

    public function render()
    {

        return view('livewire.volunter-page');
    }
}

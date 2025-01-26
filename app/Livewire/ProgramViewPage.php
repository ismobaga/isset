<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Program;

class ProgramViewPage extends Component
{
    public $program;

    public function mount($id)
    {
        $this->program = Program::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.program-view-page', [
            'program' => $this->program,
        ])->layout('layouts.front');
    }
}

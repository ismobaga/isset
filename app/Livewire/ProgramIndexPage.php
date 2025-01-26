<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Program;

class ProgramIndexPage extends Component
{
    public $programs;

    public function mount()
    {
        $this->programs = Program::all();
    }

    public function render()
    {
        return view('livewire.program-index-page', [
            'programs' => $this->programs,
        ]);
    }
}

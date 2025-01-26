<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Program;

class ProgramListPage extends Component
{
    public $programs;

    #[Layout('layouts.front')]
    public function mount()
    {
        $this->programs = Program::all();
    }

    public function render()
    {
        return view('livewire.program-list-page')
            ->layout('layouts.front');
    }
}

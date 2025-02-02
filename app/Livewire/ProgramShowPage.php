<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Program;

class ProgramShowPage extends Component
{
    public $program;

    #[Layout('layouts.front')]
    public function mount($id)
    {
        $this->program = Program::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.program-show-page')
            ->layout('layouts.front');
    }
}

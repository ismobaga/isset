<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Program;

class ProgramListPage extends Component
{
    public $programs;
    public $levels = [];
    public $selectedLevel = 'all';

    #[Layout('layouts.front')]
    public function mount()
    {
        // Get all distinct levels
        $this->levels = Program::select('niveau')->distinct()->pluck('niveau')->toArray();

        // Get all programs initially
        $this->loadPrograms();
    }

    public function filterByLevel($level)
    {
        $this->selectedLevel = $level;
        $this->loadPrograms();
    }

    protected function loadPrograms()
    {
        if ($this->selectedLevel === 'all') {
            $this->programs = Program::orderBy('niveau')->orderBy('name')->get();
        } else {
            $this->programs = Program::where('niveau', $this->selectedLevel)
                ->orderBy('name')
                ->get();
        }
    }

    public function render()
    {
        return view('livewire.program-list-page')
            ->layout('layouts.front');
    }
}

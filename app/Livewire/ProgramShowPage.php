<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Program;

class ProgramShowPage extends Component
{
    public $program;
    public $relatedPrograms;

    #[Layout('layouts.front')]
    public function mount($id)
    {
        $this->program = Program::findOrFail($id);

        // Get related programs (same niveau, excluding current one)
        $this->relatedPrograms = Program::where('niveau', $this->program->niveau)
            ->where('id', '!=', $this->program->id)
            ->take(3)
            ->get();

        // If we don't have enough related programs by niveau, get some by parent relationship
        if ($this->relatedPrograms->count() < 3) {
            if ($this->program->parent_id) {
                // Get siblings (programs with same parent)
                $siblingPrograms = Program::where('parent_id', $this->program->parent_id)
                    ->where('id', '!=', $this->program->id)
                    ->take(3 - $this->relatedPrograms->count())
                    ->get();

                $this->relatedPrograms = $this->relatedPrograms->concat($siblingPrograms)->unique('id');
            }

            // If we still don't have 3 related programs, get some random ones
            if ($this->relatedPrograms->count() < 3) {
                $randomPrograms = Program::where('id', '!=', $this->program->id)
                    ->whereNotIn('id', $this->relatedPrograms->pluck('id')->toArray())
                    ->inRandomOrder()
                    ->take(3 - $this->relatedPrograms->count())
                    ->get();

                $this->relatedPrograms = $this->relatedPrograms->concat($randomPrograms);
            }
        }
    }

    public function render()
    {
        return view('livewire.program-show-page')
            ->layout('layouts.front');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Program;
use Livewire\WithFileUploads;

class ProgramEditPage extends Component
{
    use WithFileUploads;

    public $program;
    public $name;
    public $niveau;
    public $description;
    public $duration;
    public $conditions;
    public $image;

    public function mount(Program $program)
    {
        $this->program = $program;
        $this->name = $program->name;
        $this->niveau = $program->niveau;
        $this->description = $program->description;
        $this->duration = $program->duration;
        $this->conditions = $program->conditions;
    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required|string|max:255',
            'niveau' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'nullable|string|max:255',
            'conditions' => 'nullable|string',
            'image' => 'nullable|image|max:1024', // 1MB Max
        ]);

        if ($this->image) {
            $validatedData['image'] = $this->image->store('program-images', 'public');
        }

        $this->program->update($validatedData);

        return redirect()->route('programs.index');
    }

    public function render()
    {
        return view('livewire.program-edit-page', [
            'program' => $this->program,
        ]);
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Program;
use Livewire\WithFileUploads;

class ProgramCreatePage extends Component
{
    use WithFileUploads;

    public $name;
    public $niveau;
    public $description;
    public $duration;
    public $conditions;
    public $image;
    public $programInfoPdf;

    public function save()
    {
        $validatedData = $this->validate([
            'name' => 'required|string|max:255',
            'niveau' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'nullable|string|max:255',
            'conditions' => 'nullable|string',
            'image' => 'nullable|image|max:1024', // 1MB Max
            'programInfoPdf' => 'nullable|file|mimes:pdf|max:10240', // 10MB Max
        ]);

        if ($this->image) {
            $validatedData['image'] = $this->image->store('program-images', 'public');
        }

        if ($this->programInfoPdf) {
            $validatedData['program_info_pdf'] = $this->programInfoPdf->store('program-info-pdfs', 'public');
        }

        Program::create($validatedData);

        return redirect()->route('programs.index');
    }

    public function render()
    {
        return view('livewire.program-create-page');
    }
}

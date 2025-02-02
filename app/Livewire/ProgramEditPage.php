<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Program;
use Joelwmale\LivewireQuill\Traits\HasQuillEditor;
use Livewire\WithFileUploads;

class ProgramEditPage extends Component
{
    use WithFileUploads;
    use HasQuillEditor;


    public $program;
    public $name;
    public $niveau;
    public $description;
    public $duration;
    public $conditions;
    public $image;
    public $programInfoPdf;

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
            'programInfoPdf' => 'nullable|file|mimes:pdf|max:10240', // 10MB Max
        ]);

        if ($this->image) {
            $validatedData['image'] = $this->image->store('program-images', 'public');
        } else {
            $validatedData['image'] = $this->program->image;
        }

        if ($this->programInfoPdf) {
            $validatedData['program_info_pdf'] = $this->programInfoPdf->store('program-info-pdfs', 'public');
        } else {
            $validatedData['program_info_pdf'] = $this->program->program_info_pdf;
        }

        $this->program->update($validatedData);

        return redirect()->route('programs.index');
    }

    public function contentChanged($editorId, $content)
    {
        // $editorId is the id use when you initiated the livewire component
        // $content is the raw text editor content

        // save to the local variable...
        $this->description = $content;
    }

    public function render()
    {
        return view('livewire.program-edit-page', [
            'program' => $this->program,
        ]);
    }
}

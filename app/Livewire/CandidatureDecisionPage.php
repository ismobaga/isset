<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Candidature;

class CandidatureDecisionPage extends Component
{
    use WithFileUploads;

    public $candidature;
    public $decision;
    public $programInfo;

    public function mount(Candidature $candidature)
    {
        $this->candidature = $candidature;
        $this->decision = $candidature->state;
        $this->programInfo = $candidature->program_info;
    }

    public function save()
    {
        $this->validate([
            'decision' => 'required|string|in:Accepted,Declined,Waiting list',
            'programInfo' => 'nullable|file|mimes:pdf,doc,docx|max:10240', // Validate file upload
        ]);

        if ($this->programInfo) {
            $programInfoPath = $this->programInfo->store('program_infos');
        } else {
            $programInfoPath = $this->candidature->program_info;
        }

        $this->candidature->update([
            'state' => $this->decision,
            'program_info' => $programInfoPath,
        ]);

        return redirect()->route('candidatures.index');
    }

    public function render()
    {
        return view('livewire.candidature-decision-page', [
            'candidature' => $this->candidature,
        ]);
    }
}

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
    public $decisionLetter;

    public function mount(Candidature $candidature)
    {
        $this->candidature = $candidature;
        $this->decision = $candidature->state;
        $this->programInfo = $candidature->program_info;
        $this->decisionLetter = $candidature->decision_letter;
    }

    public function save()
    {
        $this->validate([
            'decision' => 'required|string|in:accepted,declined,waiting_list',
            'programInfo' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
            'decisionLetter' => 'nullable|file|mimes:pdf,doc,docx|max:10240',
        ]);



        if ($this->programInfo) {
            $programInfoPath = $this->programInfo->store('program_infos');
        } else {
            $programInfoPath = $this->candidature->program_info;
        }

        if ($this->decisionLetter) {
            $decisionLetterPath = $this->decisionLetter->store('decision_letters');
        } else {
            $decisionLetterPath = $this->candidature->decision_letter;
        }


        $this->candidature->update([
            'state' => $this->decision,
            'program_info' => $programInfoPath,
            'decision_letter' => $decisionLetterPath,
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

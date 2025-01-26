<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Candidature;

class CandidatureDecisionPage extends Component
{
    public $candidature;
    public $decision;

    public function mount(Candidature $candidature)
    {
        $this->candidature = $candidature;
        $this->decision = $candidature->state;
    }

    public function save()
    {
        $this->validate([
            'decision' => 'required|string|in:Accepted,Declined,Waiting list',
        ]);

        $this->candidature->update([
            'state' => $this->decision,
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

<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Candidature;

class CandidatureIndexPage extends Component
{
    public $candidatures;

    public function mount()
    {
        $this->candidatures = Candidature::all();
    }

    public function render()
    {
        return view('livewire.candidature-index-page', [
            'candidatures' => $this->candidatures,
        ]);
    }
}

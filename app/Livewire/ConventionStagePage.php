<?php

namespace App\Livewire;

use Livewire\Component;

class ConventionStagePage extends Component
{
    public function render()
    {
        return view('livewire.convention-stage-page')
            ->layout('layouts.front');
    }
}

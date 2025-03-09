<?php

namespace App\Livewire;

use Livewire\Component;

class InscriptionProcedurePage extends Component
{
    public function render()
    {
        return view('livewire.inscription-procedure-page')
            ->layout('layouts.front');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;

class PresentationIsestPage extends Component
{
    public function render()
    {
        return view('livewire.presentation-isest-page')
            ->layout('layouts.front');
    }
}

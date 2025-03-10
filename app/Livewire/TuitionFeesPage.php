<?php

namespace App\Livewire;

use Livewire\Component;

class TuitionFeesPage extends Component
{
    public function render()
    {
        return view('livewire.tuition-fees-page')
            ->layout('layouts.front');
    }
}

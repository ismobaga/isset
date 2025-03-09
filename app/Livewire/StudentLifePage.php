<?php

namespace App\Livewire;

use Livewire\Component;

class StudentLifePage extends Component
{
    public function render()
    {
        return view('livewire.student-life-page')
            ->layout('layouts.front');
    }
}

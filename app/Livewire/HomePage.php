<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.front')] 
class HomePage extends Component
{
    public function render()
    {
        return view('livewire.home-page');
    }
}
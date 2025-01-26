<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class AboutPage extends Component
{
    #[Layout('layouts.front')]
    public function render()
    {
        return view('livewire.about-page')
            ->layout('layouts.front');
    }
}

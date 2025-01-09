<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;


class HomePage extends Component
{

    public bool $showVideoModal = false;

    #[Layout('layouts.front')] 
    public function render()
    {
        return view('livewire.home-page')
                ->layout('layouts.front'); 
    }
}

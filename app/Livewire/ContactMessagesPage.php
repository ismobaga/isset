<?php

namespace App\Livewire;

use App\Models\ContactMessage;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ContactMessagesPage extends Component
{
    public $messages;

    // #[Layout('layouts.edu')]
    public function mount()
    {
        $this->messages = ContactMessage::all();
    }

    public function render()
    {
        return view('livewire.contact-messages-page')
            ->layout('layouts.app');
    }
}

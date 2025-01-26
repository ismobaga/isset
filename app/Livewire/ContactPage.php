<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\ContactMessage;

class ContactPage extends Component
{
    public $name, $email, $message;

    #[Layout('layouts.front')]
    public function submit()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        ContactMessage::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        session()->flash('message', 'Votre message a été envoyé avec succès.');
    }

    public function render()
    {
        return view('livewire.contact-page')
            ->layout('layouts.front');
    }
}

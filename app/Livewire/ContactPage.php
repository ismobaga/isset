<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;

class ContactPage extends Component
{
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $message;
    public $consent = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:20',
        'subject' => 'required|string|max:255',
        'message' => 'required|string|max:5000',
        'consent' => 'accepted',
    ];

    protected $messages = [
        'consent.accepted' => 'Vous devez accepter les conditions pour envoyer le formulaire.',
        'subject.required' => 'Veuillez sélectionner un sujet.',
    ];

    #[Layout('layouts.front')]
    public function submit()
    {
        $this->validate();

        // Create contact message
        ContactMessage::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => $this->subject,
            'message' => $this->message,
            'consent' => $this->consent,
        ]);

        // You could add email notification here
        // Mail::to('admin@example.com')->send(new \App\Mail\NewContactMessage($contactData));

        session()->flash('message', 'Votre message a été envoyé avec succès. Nous vous contacterons prochainement.');

        // Reset all fields
        $this->reset(['name', 'email', 'phone', 'subject', 'message', 'consent']);
    }

    public function render()
    {
        return view('livewire.contact-page')
            ->layout('layouts.front');
    }
}

<?php

namespace App\Mail;

use App\Models\Candidature;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DeclinedLetter extends Mailable
{
    use Queueable, SerializesModels;

    public $candidature;

    public function __construct(Candidature $candidature)
    {
        $this->candidature = $candidature;
    }

    public function build()
    {
        $view = $this->view('emails.declined-letter')
                    ->with([
                        'name' => $this->candidature->firstname,
                    ]);
        if ($this->candidature->decision_letter)
        $view                    ->attach(storage_path('app/' . $this->candidature->decision_letter), [
            'as' => 'DeclinedLetter.pdf',
            'mime' => 'application/pdf',
        ]);
        return $view;
    }
}

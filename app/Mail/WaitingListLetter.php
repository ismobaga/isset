<?php

namespace App\Mail;

use App\Models\Candidature;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WaitingListLetter extends Mailable
{
    use Queueable, SerializesModels;

    public $candidature;

    public function __construct(Candidature $candidature)
    {
        $this->candidature = $candidature;
    }

    public function build()
    {
        $view =  $this->view('emails.waiting-list-letter')
            ->with([
                'name' => $this->candidature->firstname,
            ]);
        if ($this->candidature->decision_letter)

            $view->attach(storage_path('app/' . $this->candidature->decision_letter), [
                'as' => 'WaitingListLetter.pdf',
                'mime' => 'application/pdf',
            ]);

        return $view;
    }
}

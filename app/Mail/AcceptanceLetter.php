<?php

namespace App\Mail;

use App\Models\Candidature;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AcceptanceLetter extends Mailable
{
    use Queueable, SerializesModels;

    public $candidature;

    public function __construct(Candidature $candidature)
    {
        $this->candidature = $candidature;
    }

    public function build()
    {
        $view =  $this->view('emails.acceptance-letter')
            ->with([
                'name' => $this->candidature->firstname,
                'programName' => $this->candidature->program->name,
            ]);
        if ($this->candidature->program_info) {
            $view->attach(storage_path('app/' . $this->candidature->program_info), [
                'as' => 'ProgramInfo.pdf',
                'mime' => 'application/pdf',
            ]);
        }
        if ($this->candidature->decision_letter) {
            $view->attach(storage_path('app/' . $this->candidature->decision_letter), [
                'as' => 'AcceptanceLetter.pdf',
                'mime' => 'application/pdf',
            ]);
        }
        return $view;
    }
}

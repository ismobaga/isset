<?php

namespace App\Listeners;

use App\Events\CandidatureDecisionUpdated;
use Illuminate\Support\Facades\Mail;
use App\Mail\AcceptanceLetter;
use App\Mail\DeclinedLetter;
use App\Mail\WaitingListLetter;

class SendCandidatureDecisionEmail
{
    public function handle(CandidatureDecisionUpdated $event)
    {
        $candidature = $event->candidature;

        switch ($candidature->state) {
            case 'accepted':
                Mail::to($candidature->email)->send(new AcceptanceLetter($candidature));
                break;
            case 'declined':
                Mail::to($candidature->email)->send(new DeclinedLetter($candidature));
                break;
            case 'waiting_list':
                Mail::to($candidature->email)->send(new WaitingListLetter($candidature));
                break;
        }
    }
}

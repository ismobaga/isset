<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendLoginInfo extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->subject('Your Moodle Login Information')
                    ->view('emails.send-login-info')
                    ->with([
                        'name' => $this->user->name,
                        'email' => $this->user->email,
                        'password' => 'Isest1234@', // The password used during user creation
                    ]);
    }
}

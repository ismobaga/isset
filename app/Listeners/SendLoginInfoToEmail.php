<?php

namespace App\Listeners;

use App\Events\UserCreatedOnMoodle;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendLoginInfo;

class SendLoginInfoToEmail
{
    public function handle(UserCreatedOnMoodle $event)
    {
        Mail::to($event->user->email)->send(new SendLoginInfo($event->user));
    }
}

<?php

namespace App\Listeners;

use App\Events\CandidatureDecisionUpdated;
use App\Events\UserCreatedOnMoodle;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class CreateUserOnCandidatureAccepted
{
    protected $http;
    protected $adminToken;
    protected $userModel;

    public function __construct()
    {
        $this->http = Http::withOptions([
            'base_uri' => config('laravel-moodle.base_url'),
        ]);

        $this->adminToken = config('laravel-moodle.admin_token');
        $this->userModel = config('laravel-moodle.user_model');
    }

    public function handle(CandidatureDecisionUpdated $event)
    {
        if ($event->candidature->state === 'accepted') {
            $username = $event->candidature->email;
            $password = 'Isest1234@';

            $user = User::firstOrCreate(
                ['email' => $username],
                [
                    'name' => $event->candidature->firstname . ' ' . $event->candidature->lastname,
                    'password' => Hash::make($password),
                ]
            );

            // Create user on Moodle
            $response = $this->http->asForm()->post('/webservice/rest/server.php', [
                'wstoken' => $this->adminToken,
                'wsfunction' => 'core_user_create_users',
                'moodlewsrestformat' => 'json',
                'users' => [
                    [
                        'username' => $user->email,
                        'password' => $password, // You may want to generate a random password or send an email to set the password
                        'firstname' => $event->candidature->firstname,
                        'lastname' => $event->candidature->lastname,
                        'email' => $user->email,
                    ],
                ],
            ])->json();

            // dd($response);
            if (! isset($response['error']) &&  !isset($response['exception'])) {
                $userData =  $response[0];

                $user->moodle_id = $userData['id'];
                $user->save();

                // Fire an event to send login information to email
                event(new UserCreatedOnMoodle($user));
            }


            if (isset($response['error']) || !isset($response['exception'])) {
                // Handle the error
                // You may want to log the error or notify the admin
            }
        }
    }
}

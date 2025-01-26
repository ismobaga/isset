<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;
use Illuminate\Http\Request;
use Laravel\Fortify\Actions\AttemptToAuthenticate;
use Laravel\Fortify\Fortify;
use App\Providers\CustomMoodleUserProvider;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->configurePermissions();

        Jetstream::deleteUsersUsing(DeleteUser::class);

        Fortify::authenticateUsing(function (Request $request) {
            $provider = new CustomMoodleUserProvider();

            $creds = $request->only(config('laravel-moodle.login_attribute'), 'password');
            $user = $provider->retrieveByCredentials($creds);

            if ($provider->validateCredentials($user, $creds)) {
                // Limit user interaction based on role
                if ($user->role === 'student') {
                    // Restrict access or redirect to a specific page
                    return null;
                }

                return $user;
            }

            return null;
        });
    }

    /**
     * Configure the permissions that are available within the application.
     */
    protected function configurePermissions(): void
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);
    }
}

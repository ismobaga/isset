<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;
use Illuminate\Http\Request;
use Laravel\Fortify\Actions\AttemptToAuthenticate;
use Laravel\Fortify\Fortify;
use NetworkRailBusinessSystems\LaravelMoodle\MoodleUserProvider;

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
            $provider = new MoodleUserProvider();
            // dd("test");
            $user = User::where('username', $request->username)->firstOrNew();
            
            // AttemptToAuthenticate
            $creds = $request->only(config('laravel-moodle.login_attribute'), 'password');
            // $user = new User();
            $user->username = $request->get(config('laravel-moodle.login_attribute'), '');
            $rep = $provider->validateCredentials($user, $creds);
            // dump($user, $creds);
            // dump($request);
            $userRet = $provider->retrieveByCredentials($creds);
            // dump($rep);
            // dump($userRet);

            $sess = session('moodle-token');
            // dd($sess);
            // $user = User::where('email', $request->email)->first();

            return $userRet;

            // dd($user);
    
            // if ($user &&
            //     Hash::check($request->password, $user->password)) {
            //     return $user;
            // }
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

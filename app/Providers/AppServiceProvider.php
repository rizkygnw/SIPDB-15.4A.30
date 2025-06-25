<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Log aktivitas login
        Event::listen(Login::class, function ($event) {
            activity('auth')
                ->causedBy($event->user)
                ->log('User logged in');
        });

        // Log aktivitas logout
        Event::listen(Logout::class, function ($event) {
            activity('auth')
                ->causedBy($event->user)
                ->log('User logged out');
        });

        // Log aktivitas register
        Event::listen(Registered::class, function ($event) {
            activity('auth')
                ->causedBy($event->user)
                ->log('User registered');
        });

        // if (app()->environment('production')) {
        //     URL::forceScheme('https');
        // }
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Mail\WelcomeUser; 
use Illuminate\Support\Facades\Mail;
use App\Models\User;
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
        //built-in event
        // User::created(function($user){
        //     Mail::to($user)->send(new WelcomeUser($user));
        // });
    }
}

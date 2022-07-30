<?php

namespace App\Listeners;
use App\Mail\WelcomeUser;
use Illuminate\Support\Facades\Mail;
use App\Events\UserWelcome;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailWelcomeUser
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\UserWelcome  $event
     * @return void
     */
    public function handle(UserWelcome $event)
    {
        //
echo $event->user;
        Mail::to($event->user->email)->send(new WelcomeUser($event->user));
    }
}

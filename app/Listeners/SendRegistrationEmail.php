<?php

namespace App\Listeners;

use App\Events\RegistrationCompleted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendRegistrationEmail
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
     * @param  RegistrationCompleted  $event
     * @return void
     */
    public function handle(RegistrationCompleted $event)
    {
        Mail::to($event->user)->send(new RegistrationEmail($event->user));
    }
}

<?php

namespace App\Listeners;

use App\Events\ConfirmationRequest;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\ConfirmEmail;
use Illuminate\Support\Facades\Mail;

class SendConfirmationEmail
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
     * @param  ConfirmationRequest  $event
     * @return void
     */
    public function handle(ConfirmationRequest $event)
    {
        Mail::to($event->user)->send(new ConfirmEmail($event->user));
    }
}

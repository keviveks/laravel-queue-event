<?php

namespace App\Listeners;

use App\Events\dashboardNotification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
// use Illuminate\Mail\Mailable;
// use Illuminate\Support\Facades\Mail;
use Mail;
use App\Mail\userEmail;

class dashboardListener 
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
     * @param  dashboardNotification  $event
     * @return void
     */
    public function handle(dashboardNotification $event)
    {
        echo "yes this event listener got triggered";
        $data = array(
            'name' => $event->user->name
        );
        $message = "dashboard logged in";
        Mail::to($event->user->email)
            ->later(5, new userEmail($data));
        // Mail::later(5, 'email.event', $data, function($message) use ($event) {
        //     $message->to($event->user->email);
        //     $message->subject('Event mail Testing');
        // });
    }
}

<?php

namespace App\Listeners;

use App\Events\login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class userAuthListener
{
    /**
     * Handle user login events. 
     */ 
    public function onUserLogin($event) {
        $event->user->last_login_at = date('Y-m-d H:i:s', time());
        $event->user->save();
    }

    /**
     * Handle user logout events.
     */
    public function onUserLogout($event) {
        $event->user->last_logout_at = date('Y-m-d H:i:s', time());
        $event->user->save();
    }

    /**
     * Handle the event.
     *
     * @param  login  $event
     * @return void
     */
    public function subscribe($events)
    {
        $events->listen(
            'Illuminate\Auth\Events\Login',
            'App\Listeners\userAuthListener@onUserLogin'
        );
    
        $events->listen(
            'Illuminate\Auth\Events\Logout',
            'App\Listeners\userAuthListener@onUserLogout'
        );
    }
}

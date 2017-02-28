<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class userLastLogin
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
     * @param  auth.login  $event
     * @return void
     */
    public function handle($login)
    {
        $login->user->last_login_at = date('Y-m-d H:i:s', time());
        $login->user->save();
    }
}

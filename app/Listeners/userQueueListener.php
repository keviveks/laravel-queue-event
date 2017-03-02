<?php

namespace App\Listeners;

use App\Events\userQueueEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class userQueueListener implements ShouldQueue
{
    use InteractsWithQueue;

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
     * @param  userQueueEvent  $event
     * @return void
     */
    public function handle(userQueueEvent $event)
    {
        echo "test queue";
    }
}

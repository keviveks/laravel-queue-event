<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        // 'Illuminate\Auth\Events\Login' => [
        //     'App\Listeners\userLastLogin',
        // ],
        'App\Events\dashboardNotification' => [
            'App\Listeners\dashboardListener',
        ],
        'App\Events\userQueueEvent' => [
            'App\Listeners\userQueueListener',
        ],
    ];
    
    protected $subscribe = [
        'App\Listeners\userAuthListener',
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}

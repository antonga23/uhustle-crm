<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        'App\Events\ClientAction' => [
            'App\Listeners\ClientActionNotify',
            'App\Listeners\ClientActionLog',
        ],
         'App\Events\TaskAction' => [
            'App\Listeners\TaskActionNotify',
            'App\Listeners\TaskActionLog',
         ],
        'App\Events\LeadAction' => [
            'App\Listeners\LeadActionNotify',
            'App\Listeners\LeadActionLog',
        ],
        'App\Events\NewComment' => [
            'App\Listeners\NotiftyMentionedUsers'
        ]
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

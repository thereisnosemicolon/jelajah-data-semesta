<?php

namespace App\Providers;

use App\Events\CreateNewsEvent;
use App\Events\DeleteNewsEvent;
use App\Events\UpdateNewsEvent;
use App\Listeners\CreateNewsListener;
use App\Listeners\DeleteNewsListener;
use App\Listeners\UpdateNewsListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        CreateNewsEvent::class => [
            CreateNewsListener::class
        ],
        UpdateNewsEvent::class => [
            UpdateNewsListener::class
        ],
        DeleteNewsEvent::class => [
            DeleteNewsListener::class
        ]
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}

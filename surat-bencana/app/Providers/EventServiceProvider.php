<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\Login;
use App\Events\Logout;
use App\Events\ModelCreated;
use App\Events\ModelDeleted;
use App\Events\ModelUpdated;
use App\Listeners\LogLogin;
use App\Listeners\LogLogout;
use App\Listeners\LogModelCreated;
use App\Listeners\LogModelUpdated;
use App\Listeners\LogModelDeleted;


class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Login::class => [
            LogLogin::class,
        ],
        Logout::class => [
            LogLogout::class,
        ],
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ModelCreated::class => [
            LogModelCreated::class,
        ],
        ModelDeleted::class => [
            LogModelDeleted::class,
        ],
        ModelUpdated::class => [
            LogModelUpdated::class,
        ],
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

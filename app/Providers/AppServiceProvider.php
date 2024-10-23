<?php

namespace App\Providers;

use App\Policies\NotificationPolicy;
use Gate;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::policy(
            DatabaseNotification::class,
            NotificationPolicy::class
        );
    }
}

<?php

namespace Infrastructure\Admin\Providers;

use Carbon\Laravel\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    public function boot() : void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'admin');

        $this->app->register(AdminRouteServiceProvider::class);
    }
}

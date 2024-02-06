<?php

namespace Infrastructure\User\providers;

use Domains\User\Repositories\UserRepositoryContract;
use Illuminate\Support\ServiceProvider;
use Infrastructure\User\Repositories\EloquentUserRepository;

class UserServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryContract::class, EloquentUserRepository::class);
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'user');

        $this->app->register(UserRouteServiceProvider::class);
    }

}

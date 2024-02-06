<?php

namespace Infrastructure\Product\Providers;

use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     */
    public function register(): void
    {

    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'product');

        $this->app->register(ProductRouteServiceProvider::class);
    }

}

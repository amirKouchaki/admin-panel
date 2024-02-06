<?php

namespace Infrastructure\Product\Providers;

use Domains\Product\Repositories\ProductRepository;
use Illuminate\Support\ServiceProvider;
use Infrastructure\Product\Repositories\EloquentProductRepository;

class ProductServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ProductRepository::class,EloquentProductRepository::class);
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'product');

        $this->app->register(ProductRouteServiceProvider::class);
    }

}

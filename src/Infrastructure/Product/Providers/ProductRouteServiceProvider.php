<?php

namespace Infrastructure\Product\Providers;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class ProductRouteServiceProvider extends RouteServiceProvider
{
    public function boot(): void
    {
        $this->routes(function() {
            Route::middleware('web')
                ->group(__DIR__.'/../../../Application/Product/Routes/routes.php');
        });
    }
}

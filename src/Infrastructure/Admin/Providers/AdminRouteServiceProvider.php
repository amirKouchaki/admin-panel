<?php

namespace Infrastructure\Admin\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class AdminRouteServiceProvider extends RouteServiceProvider
{
    public function boot(): void
    {
        $this->routes(function() {
            Route::middleware('web')
                ->group(__DIR__.'/../../../Application/Admin/Routes/routes.php');
        });
    }
}

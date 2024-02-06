<?php

namespace Infrastructure\User\providers;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

class UserRouteServiceProvider extends RouteServiceProvider
{
    public function boot(): void
    {
        $this->routes(function() {
            Route::middleware('web')
                ->group(__DIR__.'/../../../Application/User/Routes/routes.php');
        });
    }
}

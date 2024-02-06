<?php

use Application\Admin\Http\Controller\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', DashboardController::class)->name('dashboard')->middleware("auth");



<?php

use Application\Admin\Http\Controller\DashboardController;
use Application\Admin\Http\Controller\TableController;
use Illuminate\Support\Facades\Route;
use Application\User\notifications\SendOTPNotification;
use Domains\User\Models\User;

require_once __DIR__ . "/auth.php";


Route::get('/user-sms-test', static function() {
    User::query()->find(1)?->notify(new SendOTPNotification(1234));
});

Route::get('dashboard', DashboardController::class)->name('dashboard')->middleware("auth");
Route::get('tables', TableController::class)->name('tables');


<?php

use Application\User\Http\Controllers\AuthenticationController;

Route::group(['as' => 'auth.', 'prefix' => 'auth'], static function () {

    Route::middleware('guest')->group(static function () {
        Route::get('login-view', [AuthenticationController::class, 'loginView'])->name('login-view');
        Route::get('register-view',[AuthenticationController::class,'registerView'])->name('register-view');

        Route::post('login', [AuthenticationController::class, 'login'])->name('login');
        Route::post('register', [AuthenticationController::class, 'register'])->name('register');
    });

    Route::middleware("auth")->group(static function () {
        Route::post('logout', [AuthenticationController::class, 'logout'])->name('logout');
    });
});

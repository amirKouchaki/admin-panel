<?php

use Application\User\notifications\SendOTPNotification;
use Domains\User\Models\User;

require_once __DIR__ . "/auth.php";


Route::get('/user-sms-test', static function() {
    User::findOrFail(1)->notify(new SendOTPNotification(1234));
});

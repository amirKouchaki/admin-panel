<?php

namespace Infrastructure\Shared\Services\SMS\providers;

use Domains\Shared\Contracts\SMS\SMSContract;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\ServiceProvider;
use Infrastructure\Shared\Services\SMS\Implementations\MelipayamakService;
use Infrastructure\Shared\Services\SMS\NotificationChannels\SMS;
use Infrastructure\Shared\Services\SMS\NotificationChannels\SMSByPattern;

class SMSServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->bind(SMSContract::class,MelipayamakService::class);
    }

    public function boot(): void
    {
        Notification::extend('sms',static function () {
            return new SMS();
        });

        Notification::extend('pattern-sms',static function () {
            return new SMSByPattern();
        });
    }
}

<?php

namespace Infrastructure\Shared\Services\SMS\NotificationChannels;

use http\Exception\RuntimeException;
use Illuminate\Notifications\Notification;
use Infrastructure\Shared\Services\SMS\DTOs\SMSChannelDTO;
use Infrastructure\Shared\Services\SMS\Facades\SMSGateway;

class SMS
{
    public function send(object $notifiable, Notification $notification): void
    {
        $smsChannelDTO = $notification->toSMS($notifiable);

        if(!$smsChannelDTO instanceof SMSChannelDTO) {
            throw new RuntimeException('send sms channel DTO from notification');
        }

        SMSGateway::send($smsChannelDTO->recipient,$smsChannelDTO->body);
    }
}

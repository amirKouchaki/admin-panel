<?php

namespace Infrastructure\Shared\Services\SMS\NotificationChannels;


use http\Exception\RuntimeException;
use Illuminate\Notifications\Notification;
use Infrastructure\Shared\Services\SMS\DTOs\PatternSMSChannelDTO;
use Infrastructure\Shared\Services\SMS\Facades\SMSGateway;

class SMSByPattern
{
    public function send(object $notifiable,Notification $notification): void
    {
        $patternSMSChannelDTO = $notification->toPatternSMS($notifiable);

        if(!$patternSMSChannelDTO instanceof PatternSMSChannelDTO) {
            throw new RuntimeException('send pattern sms channel DTO from notification');
        }

        SMSGateway::sendByPattern($patternSMSChannelDTO->recipient,$patternSMSChannelDTO->variables,$patternSMSChannelDTO->pattern);
    }
}

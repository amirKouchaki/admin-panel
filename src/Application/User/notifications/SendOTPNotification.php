<?php

namespace Application\User\notifications;


use Domains\Shared\Enums\SMSPattern;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Infrastructure\Shared\Services\SMS\DTOs\PatternSMSChannelDTO;

class SendOTPNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(protected int $code)
    {

    }

    /**
     * Get the notification's delivery channels.
     *
     * @return string
     */
    public function via(object $notifiable): string
    {
        return 'pattern-sms';
    }


    public function toPatternSMS(object $notifiable)
    {
        return new PatternSMSChannelDTO($notifiable->phone,[$this->code],SMSPattern::OTP_CODE);
    }


    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}

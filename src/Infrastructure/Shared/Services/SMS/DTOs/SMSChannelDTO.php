<?php

namespace Infrastructure\Shared\Services\SMS\DTOs;

class SMSChannelDTO
{
    public function __construct(public readonly string $recipient,public readonly string $body)
    {
    }


}

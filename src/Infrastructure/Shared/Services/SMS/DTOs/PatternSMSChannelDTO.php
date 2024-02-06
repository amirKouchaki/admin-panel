<?php

namespace Infrastructure\Shared\Services\SMS\DTOs;


use Infrastructure\Shared\Services\SMS\Enums\SMSPattern;

class PatternSMSChannelDTO
{
    public function __construct(public readonly string $recipient,public readonly array $variables,public readonly SMSPattern $pattern)
    {
    }
}

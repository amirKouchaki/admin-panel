<?php

namespace Infrastructure\Shared\Services\SMS\DTOs;


use Domains\Shared\Enums\SMSPattern;

class PatternSMSChannelDTO
{
    public function __construct(public readonly string $recipient,public readonly array $variables,public readonly SMSPattern $pattern)
    {
    }
}

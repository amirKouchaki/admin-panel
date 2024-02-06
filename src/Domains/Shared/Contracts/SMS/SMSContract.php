<?php

namespace Domains\Shared\Contracts\SMS;


use Infrastructure\Shared\Services\SMS\Enums\SMSPattern;


abstract class SMSContract
{
    protected array $patterns = [];

    abstract public function send(string $to, string $text):string;

    abstract public function sendByPattern(string $to,array $variables,SMSPattern $patternId):bool;

}

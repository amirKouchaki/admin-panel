<?php

namespace Domains\Shared\Contracts\SMS;


use Domains\Shared\Enums\SMSPattern;



abstract class SMSContract
{
    protected array $patterns = [];

    abstract public function send(string $to, string $text):string;

    abstract public function sendByPattern(string $to,array $variables,SMSPattern $patternId):bool;

}

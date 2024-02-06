<?php

namespace Infrastructure\Shared\Services\SMS\Facades;

use Domains\Shared\Contracts\SMS\SMSContract;
use Domains\Shared\Enums\SMSPattern;
use Illuminate\Support\Facades\Facade;


/**
 * @method static SMSContract send(string $to,string $text)
 * @method static SMSContract sendByPattern(string $to,array $variables,SMSPattern $patternId)
 *
 * @see SMSServiceContract
 */
class SMSGateway extends Facade
{



    protected static function getFacadeAccessor(): string
    {
        return app(SMSContract::class)::class;
    }
}

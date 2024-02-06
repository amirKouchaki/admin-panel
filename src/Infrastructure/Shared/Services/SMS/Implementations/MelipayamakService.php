<?php

namespace Infrastructure\Shared\Services\SMS\Implementations;

use Domains\Shared\Contracts\SMS\SMSContract;
use Illuminate\Support\Facades\Http;
use Infrastructure\Shared\Services\SMS\Enums\SMSPattern;

class MelipayamakService extends SMSContract
{
    protected string $password;
    protected string $username;
    protected string $baseUrl;
    protected string $smsNumber;

    public function __construct()
    {
        $this->patterns = [
            SMSPattern::OTP_CODE->value => 180118
        ];

        $this->username = config('custom.sms.providers.melipayamak.username');
        $this->password = config('custom.sms.providers.melipayamak.password');
        $this->baseUrl = config('custom.sms.providers.melipayamak.base_webservice_url');
        $this->smsNumber = config('custom.sms.providers.melipayamak.sms_gateway_number');
    }

    public function send(string $to, string $text): string
    {

        Http::withHeaders(['Content-Type' => 'application/json'])->post($this->baseUrl.'SendSimpleSMS2',[
            'username'=> $this->username,
            "password" => $this->password,
            "from" => $this->smsNumber,
            "to" => $to,
            "text" => $text,
            "isflash" => "true"
        ]);

        return "hello";

    }

    public function sendByPattern(string $to, array $variables, SMSPattern $patternId): bool
    {
        Http::withHeaders(['Content-Type' => 'application/json'])->post($this->baseUrl.'SendByBaseNumber',[
            'username'=> $this->username,
            "password" => $this->password,
            "to" => $to,
            'text' => $variables,
            'bodyId' => $this->patterns[$patternId->value]
        ]);
        return true;
    }
}

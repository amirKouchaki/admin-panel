<?php

return [
    'providers' => [
        'kavenegar' => [
            'api_key' => env('SMS_API_KEY'),
//            'api' => 'https://api.kavenegar.com/v1/{API_KEY}/sms/send.json',
        ],
        'melipayamak' => [
            'base_webservice_url' => env('MELIPAYAMAK_BASE_WEBSERVICE_URL'),
            'username' => env('MELIPAYAMAK_USERNAME'),
            'password' => env('MELIPAYAMAK_PASSWORD'),
            'sms_gateway_number' => env('MELIPAYAMAK_SMS_GATEWAY_NUMBER'),
        ]
    ]
];

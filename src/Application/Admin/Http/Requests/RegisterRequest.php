<?php

namespace Application\Admin\Http\Requests;

use Application\Shared\Rules\MobileNumber;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name' => ['required','string','min:2','max:255'],
            'phone' => [
                'required',
                'string',
                'digits:11',
                new MobileNumber(),
                'unique:users,phone'
            ],
            'email' => ['required','string','email','max:100','unique:users,email'],
            'password' => ['required','string','min:8']
        ];
    }
}

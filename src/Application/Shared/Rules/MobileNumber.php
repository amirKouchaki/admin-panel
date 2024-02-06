<?php

namespace Application\Shared\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class MobileNumber implements ValidationRule
{
    public string $pattern = '/^09\d{9}$/';


    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match($this->pattern, $value)) {
            $fail('Make sure you have entered the right Number!!');
        }
    }
}

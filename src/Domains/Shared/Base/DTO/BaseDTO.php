<?php

namespace Domains\Shared\Base\DTO;

use Illuminate\Http\Request;

abstract class BaseDTO
{
    abstract public static function fromRequest(Request $request): static;


    public function toArray(): array
    {
        $result = [];

        foreach ($this as $key => $value) {
            $result[$key] = $value;
        }

        return $result;
    }
}

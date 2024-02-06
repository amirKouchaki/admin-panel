<?php

namespace Domains\Shared\Traits;

trait HasEnumValues
{
    public static function getValue($key)
    {
        return self::getValues()[strtoupper($key)];
    }

    public static function getValues(): array
    {
        return array_reduce(self::cases(), function ($carry, $item) {
            $carry[$item->name] = $item->value;
            return $carry;
        }, []);
    }
}

<?php

namespace Domains\User\DTOs;

use Domains\Shared\Base\DTO\BaseDTO;
use Illuminate\Http\Request;

class UserDTO extends BaseDTO
{
    public function __construct(
        public readonly ?string $name,
        public readonly ?string $phone,
        public readonly ?string $email,
        public readonly ?string $password,
    )
    {
    }



    public static function fromRequest(Request $request): static
    {
        return new self(
            name: $request->get('name'),
            phone: $request->get('phone'),
            email: $request->get('email'),
            password: $request->get('password')
        );
    }
}

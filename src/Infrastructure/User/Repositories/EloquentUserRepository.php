<?php

namespace Infrastructure\User\Repositories;

use Domains\User\DTOs\UserDTO;
use Domains\User\Models\User;
use Domains\User\Repositories\UserRepositoryContract;

class EloquentUserRepository implements  UserRepositoryContract
{

    public function create(UserDTO $userDTO): User
    {
        return User::query()->create($userDTO->toArray());
    }

    public function get(string $id): User
    {
        return User::query()->find($id);
    }
}

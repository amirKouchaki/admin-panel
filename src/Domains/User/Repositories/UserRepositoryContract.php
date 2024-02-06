<?php


namespace Domains\User\Repositories;

use Domains\User\DTOs\UserDTO;
use Domains\User\Models\User;

interface UserRepositoryContract
{
    public function create(UserDTO $userDTO) : User;

    public function get(string $id): User;
}

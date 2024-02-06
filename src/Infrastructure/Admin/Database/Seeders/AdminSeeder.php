<?php

namespace Infrastructure\Admin\Database\Seeders;

use Domains\User\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::query()->create([
            'name' => config('admin.name'),
            'email' => config('admin.email'),
            'phone' => config('admin.phone'),
            'password' => config('admin.password'),
        ]);
    }
}

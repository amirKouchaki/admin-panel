<?php

namespace Database\Seeders;

use Database\Factories\UserFactory;
use Domains\User\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $testUser = User::factory()->create([
            'name' => config('user.test_user_first_name') . config('user.test_user_last_name'),
            'email' => config('user.test_user_email'),
            'password' => config('user.test_user_password'),
            'phone' => config('user.test_user_phone'),
        ]);


    }
}

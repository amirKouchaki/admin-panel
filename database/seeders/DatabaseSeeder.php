<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Infrastructure\Admin\Database\Seeders\AdminSeeder;
use Infrastructure\Product\Database\Seeders\CategorySeeder;
use Infrastructure\Product\Database\Seeders\ProductSeeder;
use Infrastructure\User\Database\Seeders\TestUserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([TestUserSeeder::class, AdminSeeder::class,CategorySeeder::class,ProductSeeder::class]);
    }
}

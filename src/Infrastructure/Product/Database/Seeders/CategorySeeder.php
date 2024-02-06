<?php

namespace Infrastructure\Product\Database\Seeders;

use Domains\Product\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = ['Electronics','Appliances','Clothing'];

        foreach ($categories as $category) {
            Category::query()->create([
                'name' => $category
            ]);
        }
    }
}

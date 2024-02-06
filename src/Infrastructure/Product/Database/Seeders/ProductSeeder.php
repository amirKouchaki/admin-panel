<?php

namespace Infrastructure\Product\Database\Seeders;

use Domains\Product\Models\Category;
use Domains\Product\Models\Product;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $categoryIds = Category::query()->pluck('id');

        if($categoryIds->isNotEmpty()) {
            Product::factory(4)->state(new Sequence(
                fn(Sequence $sequence) => ['category_id' => $categoryIds->random()],
            ))->create();
        }
        else {
            Product::factory(4)->create();
        }

    }
}

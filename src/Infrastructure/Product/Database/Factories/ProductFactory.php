<?php

namespace Infrastructure\Product\Database\Factories;

use Domains\Product\Models\Category;
use Domains\Product\Models\Product;
use Domains\User\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class ProductFactory extends Factory
{

    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'price' => fake()->randomFloat(2,20,40),
            'category_id' => Category::factory()
        ];
    }


}

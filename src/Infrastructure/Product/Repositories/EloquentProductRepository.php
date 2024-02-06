<?php

namespace Infrastructure\Product\Repositories;

use Domains\Product\Models\Product;
use Domains\Product\Repositories\ProductRepository;
use Illuminate\Database\Eloquent\Collection;

class EloquentProductRepository implements  ProductRepository
{

    public function getAllWithCategory(): Collection|array
    {
        return Product::with('category')->get();
    }
}

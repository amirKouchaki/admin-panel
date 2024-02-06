<?php

namespace Domains\Product\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface ProductRepository
{
    public function getAllWithCategory() : Collection|array;
}

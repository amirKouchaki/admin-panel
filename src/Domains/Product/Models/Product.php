<?php

namespace Domains\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Infrastructure\Product\Database\Factories\ProductFactory;

class Product extends Model
{
    use HasFactory;


    protected static function newFactory(): ProductFactory
    {
        return ProductFactory::new();
    }


    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}

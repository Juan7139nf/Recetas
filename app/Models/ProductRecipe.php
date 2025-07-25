<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRecipe extends Model
{
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'recipe_id',
    ];
}

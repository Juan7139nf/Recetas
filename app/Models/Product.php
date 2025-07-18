<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'image'];

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'product_recipes', 'product_id', 'recipe_id');
    }
}

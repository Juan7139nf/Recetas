<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryRecipe extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = ['category_id', 'recipe_id'];
}

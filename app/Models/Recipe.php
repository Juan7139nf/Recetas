<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Recipe extends Model
{
    use HasFactory, SoftDeletes;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'gif_path',
        'image',
        'cover',
        'price',
        'license',
        'settings',
    ];

    protected $casts = [
        'image' => 'array',
        'cover' => 'array',
        'settings' => 'array',
        'price' => 'decimal:2',
    ];

    protected static function booted(): void
    {
        static::creating(function ($recipe) {
            if (empty($recipe->{$recipe->getKeyName()})) {
                $recipe->{$recipe->getKeyName()} = (string) Str::uuid();
            }

            if (empty($recipe->settings)) {
                $recipe->settings = [
                    'difficulty' => 'easy',
                    'duration_minutes' => 30,
                ];
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parts()
    {
        return $this->hasMany(RecipePart::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_recipes');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_recipes', 'recipe_id', 'product_id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function averageRating()
    {
        return $this->ratings()->avg('score');
    }
}

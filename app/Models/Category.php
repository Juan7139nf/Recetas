<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'parent_id',
        'sort_order',
        'name',
        'image',
        'slug',
    ];

    protected $casts = [
        'image' => 'array',
    ];

    protected $appends = ['display_parent', 'image_url'];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'category_recipes');
    }

    public function getDisplayParentAttribute(): string
    {
        return $this->parent ? $this->parent->name : 'Principal';
    }

    public function getImageUrlAttribute(): string
    {
        $image = $this->image;

        if (is_array($image) && isset($image['url'])) {
            $url = $image['url'];

            // Si ya es una URL completa (http o https), devuélvela tal cual
            if (str_starts_with($url, 'http://') || str_starts_with($url, 'https://')) {
                return $url;
            }

            // Si es una ruta relativa, prepende 'storage/'
            return asset('storage/' . ltrim($url, '/'));
        }

        // Imagen por defecto
        return asset('images/default.png');
    }
}

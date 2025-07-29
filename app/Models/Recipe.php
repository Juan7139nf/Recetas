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

    protected $appends = ['display_price', 'display_license', 'display_rating', 'cover_url', 'image_url'];

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

    public function getDisplayPriceAttribute()
    {
        if ($this->price == 0 || is_null($this->price)) {
            return 'Gratis';
        }
        return number_format($this->price, 2) . ' Bs';
    }

    public function getDisplayLicenseAttribute(): string
    {
        $licenses = [
            'copyright'   => 'Todos los derechos reservados',
            'cc_by'       => 'CC BY (Reconocimiento)',
            'cc_by_sa'    => 'CC BY-SA (Compartir igual)',
            'cc_by_nc'    => 'CC BY-NC (No comercial)',
            'cc0'         => 'CC0 (Dominio público)',
        ];

        return $licenses[$this->license] ?? 'Sin licencia';
    }


    public function getDisplayRatingAttribute(): string
    {
        $average = $this->averageRating();
        $emojis = ['🥴', '😕', '😐', '😊', '😍'];

        if ($average) {
            $html = '';
            for ($i = 1; $i <= 5; $i++) {
                $grayscale = $average >= $i ? 'grayscale-0' : 'grayscale';
                $emoji = $emojis[$i - 1];
                $html .= "<span class=\"text-2xl {$grayscale}\" aria-hidden=\"true\">{$emoji}</span>";
            }
            return $html;
        }

        return '<span class="ml-2 text-sm text-gray-500 dark:text-gray-200">Sin calificar</span>';
    }

    public function getCoverUrlAttribute(): string
    {
        $cover = $this->cover;

        if (is_array($cover) && isset($cover['url'])) {
            $url = $cover['url'];

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

    public function getImageUrlAttribute(): string
    {
        $image = $this->image;

        if (is_array($image) && isset($image['url'])) {
            $url = $image['url'];

            return str_starts_with($url, 'http') ? $url : asset('storage/' . ltrim($url, '/'));
        }

        return asset('images/default.png');
    }

    public function getRouteForUser(?User $user): string
    {
        if ($this->price == 0 || is_null($this->price)) {
            return route('recipe.read', $this->id);
        }
        
        if (!$user) {
            return route('recipe.buy', $this->id); // visitante
        }

        $hasPurchased = $user->orders()
            ->where('status', 'confirmado')
            ->whereHas('orderDetails', function ($q) {
                $q->where('recipe_id', $this->id);
            })
            ->exists();

        return $hasPurchased
            ? route('recipe.read', $this->id)
            : route('recipe.buy', $this->id);
    }
}

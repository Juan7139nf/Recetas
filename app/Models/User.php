<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    public $incrementing = false;
    protected $keyType = 'string';
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'username',
        'name',
        'lastname',
        'email',
        'password',
        'google_id',
        'phone',
        'birthdate',
        'image',
        'avatar',
        'settings',
        'body',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'settings' => 'array',
            'image' => 'array',
            'avatar' => 'array',
            'birthdate' => 'date',
        ];
    }

    protected $appends = ['display_name', 'image_url'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }

            if (empty($model->settings)) {
                $model->settings = [
                    'language' => 'es',
                    'theme' => 'light',
                ];
            }
        });
    }

    public function getSetting(string $key, $default = null)
    {
        return $this->settings[$key] ?? $default;
    }

    public function setSetting(string $key, $value): void
    {
        $settings = $this->settings ?? [];
        $settings[$key] = $value;
        $this->settings = $settings;
        $this->save();
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles');
    }

    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }
    
    public function orders()
    {
        return $this->hasMany(Order::class);
    }


    public function getDisplayNameAttribute()
    {
        if ($this->name && $this->lastname) {
            return "{$this->name} {$this->lastname}";
        }

        return $this->name ?? $this->username ?? 'Invitado';
    }


    public function getImageUrlAttribute(): string
    {
        $image = $this->avatar;

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

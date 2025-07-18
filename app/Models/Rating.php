<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $primaryKey = ['user_id', 'recipe_id'];

    protected $fillable = [
        'user_id',
        'recipe_id',
        'score',
        'comment',
    ];

    // Relación con User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con Recipe
    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}

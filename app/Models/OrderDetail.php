<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'order_id',
        'recipe_id',
        'price',
    ];
    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}

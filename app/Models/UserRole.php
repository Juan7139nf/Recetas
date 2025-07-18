<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = ['user_id', 'role_id'];
}

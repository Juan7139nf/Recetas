<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = ['permission_id', 'role_id'];
}

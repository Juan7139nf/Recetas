<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['key', 'table_name'];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'permission_roles');
    }
}

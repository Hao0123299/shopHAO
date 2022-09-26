<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'role';
    protected $primaryKey = 'id';
    protected $guards = [];

    public function user()
    {
        return $this->hasMany(Users::class,'role_id','id');
    }
}

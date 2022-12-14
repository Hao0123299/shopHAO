<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $guards = [];

    public function order()
    {
        return $this->hasMany(Order::class,'user_id','id');
    }
}

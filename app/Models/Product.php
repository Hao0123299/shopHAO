<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $guards = [];

    public function oderDetail()
    {
        return $this->hasMany(OrderDetails::class,'product_id','id');
    }
    public function galery()
    {
        return $this->hasMany(Galery::class,'product_id','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;
    protected $table = 'brands';
    protected $primaryKey = 'id';
    protected $guards = [];

    //Bảng brands quan hệ 1 nhiều với product

    public function product()
    {
        return $this->hasMany(Product::class,'brand_id','id');
        //return $this->hasMany(Product::class,'khóa ngoại của product','khóa chính');
    }
}

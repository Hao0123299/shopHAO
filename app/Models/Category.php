<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $primaryKey = 'id';
    protected $guards = [];

    public function product()
    {
        return $this->hasMany(Product::class,'category_id','id');
        //return $this->hasMany(Product::class,'khóa ngoại của product','khóa chính');
    }
}

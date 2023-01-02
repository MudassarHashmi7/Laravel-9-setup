<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;




    public function getsubcategory(){
        return $this->hasMany(SubCategory::class);
    }

    public  function getproducts(){
        return $this->belongsToMany(Product::class,'category_products');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

//    public function subcategories(){
//        return $this->hasMany(SubCategory::class,'category_id','id');
//    }
    public function subcategories(){
        return $this->hasMany(SubCategory::class);
    }
    public function products(){
        return $this->hasMany(Product::class,'category_id','id');
    }
}

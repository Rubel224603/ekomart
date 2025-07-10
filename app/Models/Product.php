<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    public function category(){
        return  $this->belongsTo(Category::class,'category_id','id');
    }
   public function subcategory(){
        return $this->belongsTo(SubCategory::class, 'subcategory_id', 'id');
   }
    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id','id');
    }
    public function unit(){
        return $this->belongsTo(Unit::class,'unit_id','id');
    }
    public function otherImage(){
        return $this->hasMany(OtherImage::class,'product_id','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{

        public function category(){
            return $this->belongsTo(Category::class);
            //if name convention  with laravel then not mention  cat_id, laravel autometically connect .
            //laravel nameing convention like model name Category , then subcategories table  and have it category_id.there is no need mention;
        }

}

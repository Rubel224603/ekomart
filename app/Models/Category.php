<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function category(){
        $this->belongsTo(SubCategory::class);
    }
}

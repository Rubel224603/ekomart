<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
    public function courier(){
        return $this->belongsTo(Courier::class,'courier_id','id');
    }


}

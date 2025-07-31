<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    //
    public function index(){
        $orders = Order::latest()->get();
        return view('website.backend.admin.order.index',compact('orders'));
    }
}

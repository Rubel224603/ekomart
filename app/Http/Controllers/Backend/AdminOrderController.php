<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Courier;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    //
    public function index(){
        $orders = Order::latest()->get();
        return view('website.backend.admin.order.index',compact('orders'));
    }

    public function details($id){
        $order = Order::find($id);
        $products = OrderDetails::where('order_id',$order->id)->get();
        //return $products;
        return view('website.backend.admin.order.details',compact('order','products'));
    }
    public function editOrder($id){
         $order = Order::find($id);
         $couriers = Courier::all();

        //return $order ;
        return view('website.backend.admin.order.edit',compact('order','couriers'));

    }
    public function updateOrder(Request $request,$id){
        //return $request;
        $order = Order::find($id);
        //return $order;
        $order->delivery_address = $request->delivery_address;
        $order->order_status     = $request->order_status;
        $order->courier_id       = $request->courier_id;
        $order->save();
        return redirect()->route('order.index');
    }

    public function createOrder(){
        return view('website.backend.admin.order.create');
    }
}


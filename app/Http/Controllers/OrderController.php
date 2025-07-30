<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetails;


class OrderController extends Controller
{
    //
    public function confirmOrder(Request $request){
        //return $request;
        //collect customer info & save it db...
        $customer               = new Customer();
        $customer->full_name    = $request->full_name;
        $customer->email        = $request->email;
        $customer->phone        = $request->phone;
        $customer->address      = $request->address;
        $customer->ip_address   = $request->ip();
        //return $request->ip();
        $customer->save();

        //order information...

        $order = new Order();
        $order->customer_id     = $customer->id;
        $order->order_total     = $request->order_total;
        $order->shipping_total  = 100;
        $order->delivery_address= $customer->address;
        $order->payment_method  = $request->payment_method;
        $order->order_date      = date('Y-d-m');
        $order->order_timestamp = strtotime(date('Y-d-m'));

        //return $order;
        $order->save();

        //product info save in db...

        $products = Cart::where('ip_address' ,$request->ip())->get();
        //return $products;

        foreach ($products as $product){
            $orderDetails = new OrderDetails();
            $orderDetails->order_id         = $order->id;
            $orderDetails->product_id       = $product->product_id;
            $orderDetails->product_name     = $product->product_name;
            $orderDetails->product_price    = $product->price;
            $orderDetails->product_qty      = $product->qty;

            $orderDetails->save();
            $product->delete();

        }




        return redirect()->route('order.welcome');
    }
    public function completedOrder(){

        return "Thanks for Buying Our Product...";
    }
}

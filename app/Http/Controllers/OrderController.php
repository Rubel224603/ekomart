<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
    //
    public function confirmOrder(Request $request){
        //return $request;
        try {
            DB::beginTransaction();

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
            $order->order_date      = date('Y-m-y');
            $order->order_timestamp = strtotime(date('Y-m-d'));

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

                //product sale count calculate...
               $salesCountProduct = Product::find($product->product_id);

               $salesCountProduct->sales_count++;
               $salesCountProduct->save();

               //Now cart product delete...
               $product->delete();

            }
            DB::commit();
            return redirect()->route('order.welcome');

        }catch (\Exception $e){
            DB::rollBack();
            return back()->with("message",$e->getMessage());

        }


    }


    public function completedOrder(){

        return view('website.frontend.home.cart.order-completed');
    }
}

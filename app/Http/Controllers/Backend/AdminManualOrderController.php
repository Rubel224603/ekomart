<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Courier;
use App\Models\Cart;


class AdminManualOrderController extends Controller
{
    //
    //Manual order ...

    public function createOrderProduct(){

        $products = Product::all();
        return view('website.backend.admin.order.manual.product-list',compact('products'));
    }



    public function cartManualStore(Request $request,$id){
        //return $request;
        $couriers = Courier::all();
        $product  = Product::find($id);
        //return $product;
        $cart =  new Cart();
        $cart->ip_address   = $request->ip();
        //return $request->ip();
        $cart->product_id   = $product->id;
        $cart->product_name = $product->name;

        if(isset($request->qty)){
            $cart->qty      = $request->qty;
            $cart->product_total = $product->selling_price * $cart->qty ;

        }else{
            $cart->qty      = 1;
            $cart->product_total = $product->selling_price * $cart->qty ;
        }

        $cart->price        = $product->selling_price;
        //  return $cart;
        $cart->save();

        return redirect()->route('admin.order.manual.order-index');
    }

    public function cartManualIndex(Request $request){

        $carts = Cart::where('ip_address',$request->ip())->latest()->get();
        // return $carts;
        $couriers = Courier::all();
        //return $couriers;

        return view('website.backend.admin.order.manual.cart-index',compact('carts','couriers'));

    }
    public function cartManualDelete($id){
        $cart = Cart::find($id);
        $cart->delete();
        flash()->success('deleted successfully!');
        return back();


    }
    public function manualOrderStore(Request $request)
    {
        //return $request;
        $userIp = $request->ip();

        //customer info...
        $customer               = new Customer();
        $customer->full_name    = $request->full_name;
        $customer->phone        = $request->phone;
        $customer->address      = $request->delivery_address;
        $customer->ip_address   = $userIp;
        $customer->save();

        //order info save...
        $order                  = new Order();
        $order->customer_id     = $customer->id;
        $order->order_total     = $request->total_pay;
        $order->shipping_total  = $request->shipping_total;
        $order->order_date      = date('Y-m-d');
        $order->order_timestamp = strtotime(date('Y-m-d'));
        $order->delivery_address= $request->delivery_address;
        $order->payment_method  = $request->payment_method;
        $order->save();

        //product info....save to order details..
        $orderProducts = Cart::where('ip_address', $userIp)->latest()->get();
        //return $orderProducts;
        foreach ($orderProducts as $product){
            $orderDetails = new OrderDetails();
            $orderDetails->order_id     = $order->id;
            $orderDetails->product_id   = $product->product_id;
            $orderDetails->product_name = $product->product_name;
            $orderDetails->product_price= $product->price;
            $orderDetails->product_qty  = $product->qty;
            $orderDetails->save();

            //delete cart  product...
            $product->delete();

        }
        flash()->success('Order successfully Created!');
        return back();



    }

    public function cartManualCheckout(Request $request){
        $carts = Cart::where('ip_address',$request->ip())->latest()->get();
        //return $carts;

        return view('website.backend.admin.order.manual.cart-checkout',compact('carts'));
    }

    public function cartManualUpdate(Request $request){

        $cart = Cart::find($request->cart_id);

        if ($cart) {
            $cart->qty = $request->qty;
            $cart->product_total = $request->product_total;

            $cart->save();

            return response()->json(['message' => 'Cart updated successfully.']);
        } else {
            return response()->json(['message' => 'Cart not found.'], 404);
        }
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Courier;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use Illuminate\Http\Request;
use PDF;

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
        if($request->order_status     == "Pending"){
            $order->delivery_address  = $request->delivery_address;
            $order->order_status      = $request->order_status;
            $order->payment_status    = $request->order_status;


        }elseif($request->order_status == "Processing"){
            $order->delivery_address   = $request->delivery_address;
            $order->order_status       = $request->order_status;
            $order->courier_id         = $request->courier_id;
            $order->payment_status     = $request->order_status;

        }elseif($request->order_status == 'Completed'){

            $order->order_status       = $request->order_status;
            //$order->courier_id       = $request->courier_id;

            $order->delivery_timestamp = strtotime(date('Y-m-d'));
            $order->delivery_date      = date('Y-m-d');
            $order->delivery_status    = $request->order_status;
            $order->payment_amount     = $order->order_total;
            $order->payment_date       = date('Y-m-d');
            $order->payment_timestamp  = strtotime(date('Y-m-d'));

            $order->payment_status     = $request->order_status;



        }elseif($request->order_status == 'Cancel'){
            $order->order_status       = $request->order_status;
            $order->delivery_status    = $request->order_status;
            $order->payment_status     =  $request->order_status;
        }
        $order->save();
        flash()->success('Order Updated successfully!');
        return redirect()->route('order.index');
    }

    public function invoiceOrder($id){
        $order = Order::find($id);

        return view('website.backend.admin.order.invoice',compact('order'));
    }
    public function deleteOrder($id){
        $order = Order::find($id);
        //return $order;
        if($order->order_status == "Cancel"){
            return back()->with('message',"Sorry, you can't delete this!!!");

        }
        $order->delete();
        $orderProducts = OrderDetails::where('order_id',$order->id)->get();
        foreach ($orderProducts as $product){
            $product->delete();
        }
        //return $orderProducts;
        flash()->success('order deleted successfully!');
        return back()->with('message',"Order Deleted Successfully!");


    }



    public function printOrder($id){

        $order= Order::find($id);
        //return $order;
        $pdf = PDF::loadView('website.backend.admin.order.invoice-print',compact('order'));
        return $pdf->stream('invoice.pdf');
    }

    //Manual order ...

    public function createOrderProduct(){

        $products = Product::all();
        return view('website.backend.admin.order.manual.product-list',compact('products'));
    }



    public function cartManualStore(Request $request,$id){

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

        }else{
            $cart->qty      = 1;
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
        //$order->customer_id   = 1;
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
}


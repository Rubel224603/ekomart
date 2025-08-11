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
use function Symfony\Component\Console\Tester\complete;

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


}


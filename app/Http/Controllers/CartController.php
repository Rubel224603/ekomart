<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function addToCart(Request $request){

        //$product = Product::where('slug',$slug)->first();
         $userIp = $request->ip();
        //return $request->ip();

        $carts = Cart::where('ip_address',$userIp)->latest()->get();
       // return $carts;
        //return $product;
        return view('website.frontend.home.cart.index',compact('carts'));
    }
    public function cartStore(Request $request,$id){
        //return $request;
        $product            = Product::find($id);
        //product hit count...
        $product->hit_count++;

        $product->save();
       // return $product->hit_count;

        $cart               = New Cart();
        $cart->product_id   = $product->id;
        $cart->product_name = $product->name;
        $cart->ip_address   = $request->ip();

        if(isset($request->qty)){
            $cart->qty      = $request->qty;

        }else{
            $cart->qty      = 1;
        }

        $cart->price        = $product->selling_price ;  //return $cart->price ;
        $cart->save();

        return redirect()->route('cart.add');


    }
     public function checkout(Request $request){
        //return $request->ip();
         $cartProducts= Cart::with('product')->where('ip_address',$request->ip())->get();
         //return $cartProducts;
        return view('website.frontend.home.cart.checkout',compact('cartProducts'));
    }



    public function update(Request $request)
    {
        //dd( "hi");

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


    public function cartDelete(Request $request)
    {
        $cart = Cart::find($request->cart_id);

          if($cart){
                $cart->delete();
                return response()->json(['message'=>"Cart Item Deleted"]);
           }else{
              return response()->json(['message'=>"Cart Item not found"]);
          }
    }









}

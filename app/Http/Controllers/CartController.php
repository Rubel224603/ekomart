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
        $product = Product::find($id);
       // return $product;
        $cart = New Cart();
        $cart->product_id = $product->id;
        $cart->ip_address = $request->ip();
        if(isset($request->qty)){
            $cart->qty = $request->qty;

        }else{
            $cart->qty = 1;
        }

        $cart->price = $product->selling_price ;      //return $cart->price ;
        $cart->save();

        return redirect()->route('cart.add');


    }
     public function checkout(Request $request){
        //return $request;
        return view('website.frontend.home.cart.checkout');
    }



    public function update(Request $request)
    {

        $cart = Cart::find($request->cart_id);

        if ($cart) {
            $cart->qty = $request->qty;
            $cart->save();

            return response()->json(['message' => 'Cart updated successfully.']);
        } else {
            return response()->json(['message' => 'Cart not found.'], 404);
        }

    }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function confirmOrder(Request $request){
        return $request;
    }
    public function welcome(Request $request){

        return "Thanks for Buying Our Product...";
    }
}

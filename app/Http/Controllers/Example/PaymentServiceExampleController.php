<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use App\Services\PaymentServiceExample;
use Illuminate\Http\Request;

class PaymentServiceExampleController extends Controller
{
    //
    protected  $pymtServe;

    public function __construct(PaymentServiceExample $paymentServices){

        $this->pymtServe = $paymentServices;
    }

    public function pay(){

        //service method call...which service  i made...

        return $this->pymtServe->processPayment(500);
    }

}

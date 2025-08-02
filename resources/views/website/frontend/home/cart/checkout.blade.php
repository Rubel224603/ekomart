@extends('website.frontend.master')

@section('cart')

<div class="checkout-area rts-section-gap">
    <div class="container">

      <form action="{{route('order.confirm')}}" method="POST">


        <div class="row">

            <div class="col-lg-2"></div>
            <div class="col-lg-4  pr_sm--5 order-2 order-xl-1 order-lg-2 order-md-2 order-sm-2 mt_md--30 mt_sm--30 me-5">




                <div class=" card  shadow  p-5">

                        <h3 class="title">Billing Details</h3>

                            @csrf

                        {{session('message')}}

                    <div class="mb-3">
                        <label for="" class="form-label">Your Name</label>
                        <input class="form-control" type="text" name="full_name" placeholder="Enter your Name" style="font-size: 15px !important;border:1px solid #CED4DA !important;padding:4px !important;border-radius: .25rem; !important; " required/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input  class="form-control" type="email" name="email" placeholder="enter your Email" style="font-size: 15px !important;border:1px solid #CED4DA !important;padding:4px !important;border-radius: .25rem; !important;"  required/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Phone</label>
                        <input class="form-control " type="number" name="phone" placeholder="01xxxxxxxx" required  style="font-size: 15px !important;border:1px solid #CED4DA !important;padding:4px !important;border-radius: .25rem; !important; "/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Delivery Address</label>
                        <textarea class="form-control" rows="4" placeholder="enter your address" required name="address" style="font-size: 15px !important;border:1px solid #CED4DA !important;padding:4px !important;border-radius: .25rem; !important;" ></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Payment Method</label> <br>
                        <input class="form-check-input" type="radio" name="payment_method"  value="Cash">
                        <span>Cash On Delivery</span>
                        <br>
                        <input class="form-check-input" type="radio" name="payment_method"  value="Online">
                        <span>Online</span>
                    </div>



                    <div class="mb-3">

                        <button class="rts-btn btn-primary ">Place Order</button>
                  </div>







                </div>


            </div>

            <div class="col-lg-4 order-1 order-xl-2 order-lg-1 order-md-1 order-sm-1 ms-5">

                <div class="right-card-sidebar-checkout">
                    <div class="top-wrapper">
                        <div class="product">
                            Products
                        </div>
                        <div class="price">
                            Price
                        </div>
                    </div>
                    @php
                        $total = 0;
                    @endphp
                    @foreach($cartProducts as $cartProduct)
                       <div class="single-shop-list">
                            <div class="left-area">
                                <a href="{{route('shop-product.details',$cartProduct->product->slug)}}" class="thumbnail">
                                    <img src="{{asset('backend/upload/images/product/'.$cartProduct->product->image)}}" alt="">
                                </a>
                                <a href="{{route('shop-product.details',$cartProduct->product->slug)}}" class="title">
                                    {{$cartProduct->product->name}}
                                </a>
                            </div>
                            <span class="price"> $ {{$cartProduct->qty * $cartProduct->price }} </span>
                        </div>

                        @php
                            $total += $cartProduct->qty * $cartProduct->price;
                        @endphp

                    @endforeach

                   <div class="d-flex justify-content-between me-5 ms-5 mt--20">
                       <p>subtotal</p>
                       <span> {{$subTotal = $total}}</span>
                   </div>
                    <div class="d-flex justify-content-between me-5 ms-5 " >
                       <p>Shipping</p>
                       <span> $100</span>
                   </div>
                    <div class="d-flex justify-content-between me-5 ms-5 border-top" >
                       <p>Order Total</p>
                       <span> {{$orderTotal = $subTotal +100 }}</span>
                        <input type="hidden" value="{{$orderTotal}}" name="order_total">
                   </div>




                </div>
            </div>
        </div>
      </form>
    </div>
</div>

@endsection
@push('checkout_orderConfirm')
    <script>
        document.querySelector('#placeOrder').addEventListener('click',function () {
            //alert('hil');
            const email= document.querySelector('#email').value;

            //alert('enter the email');
            if(!email){
               alert("email is required");
            }
            const fullName= document.querySelector('#full_name').value;
            if(!fullName){
                alert("email is required");
            }
            const phone= document.querySelector('#phone').value;
            if(!phone){
                alert("phone number is required");
            }
        })
    </script>
@endpush


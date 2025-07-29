@extends('website.frontend.master')

@section('cart')

<div class="checkout-area rts-section-gap">
    <div class="container">


        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4  pr_sm--5 order-2 order-xl-1 order-lg-2 order-md-2 order-sm-2 mt_md--30 mt_sm--30 me-5">

                <div class="coupon-input-area-1 ">
                    <div class="coupon-area ">
{{--                        <div class="coupon-ask  cupon-wrapper-1 shadow">--}}
{{--                            <button class="coupon-click">Have a coupon? Click here to enter your code</button>--}}
{{--                        </div>--}}
                        <div class="coupon-input-area cupon1">
                            <div class="inner">
                                <p class="mt--0 mb--20"> If you have a coupon code, please apply it below.</p>
                                <div class="form-area">
                                    <input type="text" placeholder="Enter Coupon Code...">
                                    <button type="submit" class="btn-primary rts-btn">Apply Coupon</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rts-billing-details-area card  shadow  p-5">

                        <h3 class="title">Billing Details</h3>

                        <form action="{{route('order.confirm')}}" method="POST">
                            @csrf
                            <div class="single-input">
                                <label for="email">Email Address*</label>
                                <input id="email" type="text" name="email" required>
                            </div>
                            <div class="single-input">
                                <label for="email">Full Name*</label>
                                <input  type="name" name="full_name" id="full_name" required>
                            </div>

                            <div class="single-input">
                                <label for="phone">Phone*</label>
                                <input id="phone" type="number" name="phone">
                            </div>
                            <div class="single-input">
                                <label for="ordernotes">Your Address*</label>
                                <textarea id="ordernotes" rows="5" cols="5" name="address"></textarea>
                            </div>
                        </form>


                </div>
            </div>

            <div class="col-lg-4 order-1 order-xl-2 order-lg-1 order-md-1 order-sm-1 ms-5">
                <h3 class="title-checkout">Your Order</h3>

                <div class="right-card-sidebar-checkout">
                    <div class="top-wrapper">
                        <div class="product">
                            Products
                        </div>
                        <div class="price">
                            Price
                        </div>
                    </div>
                    @foreach($cartProducts as $cartProduct)
                       <div class="single-shop-list">
                            <div class="left-area">
                                <a href="#" class="thumbnail">
                                    <img src="{{asset('backend/upload/images/product/'.$cartProduct->product->image)}}" alt="">
                                </a>
                                <a href="#" class="title">
                                    {{$cartProduct->product->name}}
                                </a>
                            </div>
                            <span class="price"> $ {{$cartProduct->qty * $cartProduct->price }} </span>
                        </div>


                    @endforeach

                    <div class="cottom-cart-right-area">

                        <ul>
                            <li>
                                <input type="radio" id="f-option" name="selector">
                                <label for="f-option">Check Payments</label>

                                <div class="check"></div>
                            </li>

                            <li>
                                <input type="radio" id="s-option" name="selector">
                                <label for="s-option">Cash On Delivery</label>

                                <div class="check">
                                    <div class="inside"></div>
                                </div>
                            </li>


                        </ul>

                        <button id="placeOrder" class="rts-btn btn-primary">Place Order</button>
                    </div>

                </div>
            </div>
        </div>
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


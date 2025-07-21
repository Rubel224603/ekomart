@extends('website.frontend.master')


@section('cart')





    <div class="rts-navigation-area-breadcrumb bg_light-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="navigator-breadcrumb-wrapper">
                        <a href="index.html">Home</a>
                        <i class="fa-regular fa-chevron-right"></i>
                        <a class="current" href="index.html">Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-seperator bg_light-1">
        <div class="container">
            <hr class="section-seperator">
        </div>
    </div>



    <!-- rts cart area start -->
    <div class="rts-cart-area rts-section-gap bg_light-1">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-9 col-lg-12 col-md-12 col-12 order-2 order-xl-1 order-lg-2 order-md-2 order-sm-2">

                    <div class="rts-cart-list-area">

                        <div class="single-cart-area-list head">
                            <div class="product-main">
                                <P>Products</P>
                            </div>
                            <div class="price">
                                <p>Price</p>
                            </div>
                            <div class="quantity">
                                <p>Quantity</p>
                            </div>
                            <div class="subtotal">
                                <p>SubTotal</p>
                            </div>
                        </div>

                        @foreach($carts as $cart)

                        <div class="single-cart-area-list main  item-parent">

                            <div class="product-main-cart">
                                <div class="close section-activation">
                                    <i class="fa-regular fa-x"></i>
                                </div>
                                <div class="thumbnail">
                                    <img src="{{asset('backend/upload/images/product/'.$cart->product->image)}}" alt="shop">
                                </div>
                                <div class="information">
                                    <h6 class="title">{{$cart->product_id}}</h6>
                                    <span>SKU:BG-1001</span>
                                </div>
                            </div>
                            <div class="price">
                                <p>${{$cart->product->selling_price}}</p>
                            </div>

                            <div class="quantity">
                                <div class="quantity-edit">
                                    <input type="text" class="input" value="1">
                                    <div class="button-wrapper-action">
                                        <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                        <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="subtotal">
                                <p>$550.00</p>
                            </div>

                        </div>


                        @endforeach









                        <div class="bottom-cupon-code-cart-area">
                            <form action="#">
                                <input type="text" placeholder="Cupon Code">
                                <button class="rts-btn btn-primary">Apply Coupon</button>
                            </form>
                            <a href="#" class="rts-btn btn-primary mr--50">Clear All</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-12 col-md-12 col-12 order-1 order-xl-2 order-lg-1 order-md-1 order-sm-1">
                    <div class="cart-total-area-start-right">
                        <h5 class="title">Cart Totals</h5>
                        <div class="subtotal">
                            <span>Subtotal</span>
                            <h6 class="price">$1100.00</h6>
                        </div>
                        <div class="shipping">
                            <span>Shipping</span>
                            <ul>
                                <li>
                                    <input type="radio" id="f-option" name="selector">
                                    <label for="f-option">Free Shipping</label>

                                    <div class="check"></div>
                                </li>

                                <li>
                                    <input type="radio" id="s-option" name="selector">
                                    <label for="s-option">Flat Rate</label>

                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </li>

                                <li>
                                    <input type="radio" id="t-option" name="selector">
                                    <label for="t-option">Local Pickup</label>

                                    <div class="check">
                                        <div class="inside"></div>
                                    </div>
                                </li>

                                <li>
                                    <p>Shipping options will be updated
                                        during checkout</p>
                                    <p class="bold">Calculate Shipping</p>
                                </li>
                            </ul>
                        </div>
                        <div class="bottom">
                            <div class="wrapper">
                                <span>Subtotal</span>
                                <h6 class="price">$1100.00</h6>
                            </div>
                            <div class="button-area">
                                <a class="rts-btn btn-primary" href="{{route('cart.checkout')}}">Proceed To Checkout </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts cart area end -->



@endsection

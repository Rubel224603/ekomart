@extends('website.frontend.master')

@section('cart')

<div class="checkout-area rts-section-gap">
    <div class="container">


        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4  pr_sm--5 order-2 order-xl-1 order-lg-2 order-md-2 order-sm-2 mt_md--30 mt_sm--30 me-5">

                <div class="coupon-input-area-1 ">
                    <div class="coupon-area ">
                        <div class="coupon-ask  cupon-wrapper-1 shadow">
                            <button class="coupon-click">Have a coupon? Click here to enter your code</button>
                        </div>
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
                        <form action="#">
                            <div class="single-input">
                                <label for="email">Email Address*</label>
                                <input id="email" type="text" required>
                            </div>
                            <div class="single-input">
                                <label for="email">Full Name*</label>
                                <input  type="name" required>
                            </div>

                            <div class="single-input">
                                <label for="phone">Phone*</label>
                                <input id="phone" type="text">
                            </div>
                            <div class="single-input">
                                <label for="ordernotes">Your Address*</label>
                                <textarea id="ordernotes"></textarea>
                            </div>
                            <button class="rts-btn btn-primary">Update Cart</button>
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
                    <div class="single-shop-list">
                        <div class="left-area">
                            <a href="#" class="thumbnail">
                                <img src="assets/images/shop/04.png" alt="">
                            </a>
                            <a href="#" class="title">
                                Foster Farms Breast Nuggets Shaped Chicken
                            </a>
                        </div>
                        <span class="price">$500.00</span>
                    </div>
                    <div class="single-shop-list">
                        <div class="left-area">
                            <a href="#" class="thumbnail">
                                <img src="assets/images/shop/04.png" alt="">
                            </a>
                            <a href="#" class="title">
                                Foster Farms Breast Nuggets Shaped Chicken
                            </a>
                        </div>
                        <span class="price">$500.00</span>
                    </div>

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

                        <a href="#" class="rts-btn btn-primary">Place Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

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

                        @foreach($carts as $index=>$cart)


                        <div class="single-cart-area-list main  item-parent">

                            <div class="product-main-cart">
                                <div class="close section-activation">
                                    <i class="fa-regular fa-x"></i>
                                </div>
                                <div class="thumbnail">
                                    <img src="{{asset('backend/upload/images/product/'.$cart->product->image)}}" alt="shop">
                                </div>
                                <div class="information">
                                    <h6 class="title">{{$cart->product->name}}</h6>
                                    <span>SKU:BG-1001</span>
                                </div>
                            </div>
                            <div class="price">
                                <p>${{$cart->product->selling_price}}</p>
                            </div>

                            <div class="quantity">
                                <div class="quantity-edit">
                                    <input type="text" class="input qty-input" value="{{ $cart->qty }}" data-index="{{ $index }}"  data-price="{{ $cart->product->selling_price }}">
                                    <div class="button-wrapper-action">
                                        <button type="button" class="button down-btn" data-index="{{ $index }}"><i class="fa-regular fa-chevron-down"></i></button>
                                        <button type="button" class="button plus up-btn" data-index="{{ $index }}">+<i class="fa-regular fa-chevron-up"></i></button>
                                    </div>
                                </div>
                            </div>


                            <div class="subtotal">
                                <p class="subtotal-value" data-index="{{$index}}">$1200</p>
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
                        <div class="subtotal">
                            <span>Shipping</span>
                            <h6 class="price">$100.00</h6>
                        </div>
                        <div class="subtotal">
                            <span>total pay</span>
                            <h6 class="price">$1000.00</h6>
                        </div>

                        <div class="bottom mt-3">

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
@push('cart_script')

    <script>

        document.addEventListener("DOMContentLoaded", function () {
            const upButtons = document.querySelectorAll('.up-btn');
            const downButtons = document.querySelectorAll('.down-btn');

            upButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const index = this.dataset.index;
                    const input = document.querySelector(`.qty-input[data-index="${index}"]`);
                    let value = parseInt(input.value);
                    if (value < 100) {
                        value++;
                        input.value = value;

                        const price = parseFloat(input.dataset.price);
                        console.log(price);
                        const subtotal = value * price;

                        const subtotalElement = document.querySelector(`.subtotal-value[data-index="${index}"]`);
                        subtotalElement.textContent = `$${subtotal.toFixed(2)}`;
                    }
                });
            });

            downButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const index = this.dataset.index;
                    const input = document.querySelector(`.qty-input[data-index="${index}"]`);
                    let value = parseInt(input.value);
                    if (value > 1) {
                        value--;
                        input.value = value;
                        const price = parseFloat(input.dataset.price);
                        console.log(price);
                        const subtotal = value * price;

                        const subtotalElement = document.querySelector(`.subtotal-value[data-index="${index}"]`);
                        subtotalElement.textContent = `$${subtotal.toFixed(2)}`;
                    }
                });
            });
        });
    </script>
@endpush

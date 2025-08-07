@extends('website.backend.master')
@section('content')

    <div class="checkout-area rts-section-gap">
        <div class="container">
            <form action="{{ route('order.confirm') }}" method="POST">
                @csrf
                <div class="row">
                    <a href="{{route('cart.manual-checkout')}}" class="btn btn-dark mb-3">other view</a>
                    <!-- Billing Info -->
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-header bg-primary text-white">
                                <h3 class="card-title">Billing info</h3>
                            </div>

                            <div class="card-body">

                                <div class="mb-3">
                                    <label class="form-label">Your Name</label>
                                    <input class="form-control" type="text" name="full_name" placeholder="Enter your Name" required />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input class="form-control" type="email" name="email" placeholder="Enter your Email" required />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Phone</label>
                                    <input class="form-control" type="number" name="phone" placeholder="01xxxxxxxx" required />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Delivery Address</label>
                                    <textarea class="form-control" rows="4" placeholder="Enter your address" required name="address"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Payment Method</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="payment_method" value="Cash" required>
                                        <label class="form-check-label">Cash On Delivery</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="payment_method" value="Online">
                                        <label class="form-check-label">Online</label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <button class="btn btn-success w-100">Place Order</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Cart Section -->
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-header bg-dark text-white">
                                <h5 class="mb-0">Your Cart</h5>
                            </div>
                            <div class="card-body">

                                <!-- Sample Cart Items -->


                                @foreach ($carts as $product)
                                    <div class="d-flex justify-content-between align-items-center border-bottom py-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{ asset('/backend/upload/images/product/'.$product->product->image) }}" alt="product" class="img-thumbnail" style="width: 60px; height: 60px;">
                                            <div>
                                                <p class="mb-1 fw-semibold">{{ $product->product_name}}</p>
                                            </div>
                                        </div>

                                        <div class="input-group input-group-sm" style="width: 110px;">
                                            <button class="btn btn-outline-secondary btn-sm" type="button">-</button>
                                            <input type="text" class="form-control text-center" value="{{$product->qty}}" readonly>
                                            <button class="btn btn-outline-secondary btn-sm" type="button">+</button>
                                        </div>

                                        <div>
                                            <span class="fw-bold">{{ $product->price}}</span>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="d-flex justify-content-between pt-3">
                                    <strong>Total</strong>
                                    <strong class="text-success">
                                    </strong>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>



@endsection



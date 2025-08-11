@extends('website.backend.master')
@section('cart_manual')
    <meta name="csrf-token" content="{{ csrf_token() }}">


@endsection
@section('content')

    <div class="checkout-area rts-section-gap mt-5">
        <div class="container">
            <form action="{{ route('manual.order.store') }}" method="POST">
                @csrf
                <div class="row">
                    <a href="{{route('cart.manual-checkout')}}" class="btn btn-dark mb-3">other view</a>
                    <!-- Billing Info -->
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-header bg-dark text-white">
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
                                    <textarea class="form-control" rows="4" name="address" placeholder="Enter your address" required ></textarea>
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

                                <table class="table align-middle table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th >Quantity</th>
                                            <th>Total</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($carts as $index=>$product)
                                        <tr data-product-id='{{$product->id}}'  class="align-items-center">
                                            <td >
                                                <div class="d-flex align-items-center gap-1" style="white-space: nowrap;">
                                                    <img src="{{ asset('/backend/upload/images/product/'.$product->product->image) }}" alt="product" class="img-thumbnail" style="width: 60px; height: 60px; flex-shrink: 0;">
                                                    <div>
                                                        <span class="mb-0 fw-semibold text-truncate">{{ $product->product_name }}</span>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="unitPrice">{{$product->price}}</td>
                                            <td class="">
                                                <div class="input-group input-group-sm">
                                                    <button class="btn btn-outline-secondary btn-sm minusBtn" type="button">-</button>
                                                    <input type="text" class="form-control text-center qtyElement" value="{{ $product->qty }}" readonly>
                                                    <button class="btn btn-outline-secondary btn-sm plusBtn" type="button">+</button>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="fw-bold productTotal">{{ $product->product_total }}</span>
                                            </td>


                                        </tr>

                                    @endforeach
                                    </tbody>

                                    <tfoot>

                                        <tr>
                                            <td colspan="3" class="text-end">Sub Total</td>
                                            <td class="text-success fw-bold subTotal">{{ 100 }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="text-end">Shipping</td>
                                            <td class="text-success fw-bold">{{ 100 }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="text-end">Grand Total</td>
                                            <td>
                                                <input type="text" name="total_pay" id="grandTotal" class="form-control text-success fw-bold" readonly>
                                            </td>
                                        </tr>


                                    </tfoot>

                                </table>

                            </div>







                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>



@endsection

@push("manual_cart_index")

    <script>
       document.addEventListener('DOMContentLoaded',function () {
            //alert('hi');

           const minusBtns = document.querySelectorAll('.minusBtn');
           const plusBtns = document.querySelectorAll('.plusBtn');
           //alert(plusBtns);
           const length = minusBtns.length;
           //alert(length);
           let priceElement = document.querySelector('.priceElement');
            plusBtns.forEach(function (btn) {
                btn.addEventListener('click',function () {
                    //alert('hi');

                    let row = this.closest('tr') ;
                    console.log(row);
                    let cartId = row.dataset.productId;
                    //alert(productId);
                    let qtyElement = row.querySelector('.qtyElement');
                    qty = qtyElement.value;
                    //alert(qty);
                    if(qty<100){
                       // alert('hi');
                        qty++
                        qtyElement.value=qty;
                        let productTotalElement=row.querySelector('.productTotal');
                        let  productPrice = parseFloat(row.querySelector('.unitPrice').textContent);
                        //console.log(priceElement);
                        let productTotal = qty * productPrice;
                        //alert(productTotal);
                        productTotalElement.textContent = productTotal;

                        fetch('/cart/manual-update',{
                            method:"POST",
                            headers:{
                                "Content-Type": "application/json",
                                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content

                            },
                            body:JSON.stringify({
                                cart_id: cartId,
                                qty: qtyElement.value,
                                product_total: productTotal
                            })

                        })
                            .then(res => res.json())
                            .then(data => console.log(data.message))
                            .catch(error => console.error("Error updating cart:", error));

                        subTotal();
                        payAble();
                    }

                });
            });


            minusBtns.forEach(function (btn) {
                btn.addEventListener('click',function () {
                    //alert('hi');

                    const row = this.closest('tr') ;
                    //console.log(row);
                    let cartId = row.dataset.productId;
                    //alert(cartId);
                    let qtyElement = row.querySelector('.qtyElement');
                    let qty = qtyElement.value;

                    //alert(price);
                    //alert(productTotal);
                    if(qty>1){
                      // alert(qty);
                        qty--;
                        qtyElement.value=qty;
                        let productTotalElement = row.querySelector('.productTotal');

                        let priceElement =row.querySelector('.unitPrice');
                        let productPrice = parseFloat(priceElement.textContent);

                        let productTotal = qty * productPrice;
                        productTotalElement.textContent = productTotal;
                        //alert(productTotal);
                        fetch('/cart/manual-update',{
                            method:"POST",
                            headers:{
                                "Content-Type": "application/json",
                                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content

                            },
                            body:JSON.stringify({
                                cart_id: cartId,
                                qty: qtyElement.value,
                                product_total:productTotal

                            })

                        })
                          .then(res => res.json())
                          .then(data => console.log(data.message))
                           .catch(error => console.error("Error updating cart:", error));

                        subTotal();
                        payAble();
                    }

                });
            });

            function subTotal(){
                const subTotalElement = document.querySelector('.subTotal');
                const productTotalElement = document.querySelectorAll('.productTotal');
                let length =productTotalElement.length;
               // alert(productTotalElement);
                let total =0;
                for(let i= 0;i<length;i++){
                   total += parseFloat(productTotalElement[i].textContent);
                }
                subTotalElement.textContent = total.toFixed(2);

            }
           subTotal();
           function payAble() {
                let orderSubTotal =parseFloat(document.querySelector('.subTotal').textContent);
               let grandTotalElement= document.querySelector('#grandTotal');
               console.log(grandTotalElement.value);
               // alert(orderSubTotal);
               if(orderSubTotal == 0){
                   grandTotalElement.value = orderSubTotal.toFixed(2);
               }else{
                   let pay= orderSubTotal + 100;

                   grandTotalElement.value = pay.toFixed(2);
               }

            }
           payAble();


       })
    </script>
@endpush



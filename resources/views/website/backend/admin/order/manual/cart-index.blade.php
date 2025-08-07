@extends('website.backend.master')
@section('cart_manual')
    <meta name="csrf-token" content="{{ csrf_token() }}">


@endsection

@section('content')
    <div class="container mt-8">
        <div class="row">


            <div class="col-lg-12 col-md-12">
                <div class="card">

                    <div class="card-body">
                        <div class="container form-container">
                            <h2 class="mb-4 text-center">Create Manual Order</h2>
                            <form action="{{route('manual.order.store')}}" method="post" enctype="multipart/form-data">
                                @csrf


                                <div class="card mb-4">
                                    <div class="card-header bg-primary text-white">
                                        Product Details
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered align-middle">
                                                <thead>
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>Product Price</th>
                                                    <th>Product Qty</th>
                                                    <th>Product Total</th>
                                                    <th>Product</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody id="productRow">
                                                @foreach($carts as $index=>$cart)
                                                    <tr  data-cart-id="{{ $cart->id }}" data-index="{{ $index }}"  >
                                                        <td>{{$cart->product_name}}</td>
                                                        <td class="price">{{$cart->price}}</td>


                                                        <td>
                                                            <div class="d-flex justify-content-around align-items-center">
                                                                <button type='button' class="btn btn-sm btn-success qtyPlusBtn" id="">+</button>
                                                                <input type="number" data-index="{{$index}}" value="{{$cart->qty}}"  class="form-control form-control-sm  text-center border-0 shadow-none inputQtyValue"  style="width: 60px;">
                                                                <button type='button' class="btn btn-sm btn-success qtyMinusBtn" id="">-</button>
                                                            </div>
                                                        </td>
                                                         <td class="productTotal">{{$cart->price * 1}}</td>
                                                        <td><img src="{{asset('backend/upload/images/product/'.$cart->product->image)}}" alt="product image" style="height: 100px;"></td>
                                                        <td><a href="{{route('admin.manual.cart.product.delete',['id'=>$cart->id])}}" class="btn btn-danger" onclick="return confirm('are you sure?? to delete this')">Delete</a></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="3">Product Total</td>
                                                        <td colspan="3" id="productSubTotal">$$</td>
                                                    </tr>
                                                </tfoot>

                                            </table>
                                        </div>
                                        <a href="{{route('admin.order.create')}}" class="btn btn-primary btn-sm mt-2" id="btnAddNewProduct">Add New Product</a>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-header bg-primary text-white">
                                        Customer Information
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="customerName" class="form-label">Customer Name</label>
                                            <input type="text" class="form-control" id="customerName" placeholder="Name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="customerPhone" class="form-label">Customer Phone</label>
                                            <input type="tel" class="form-control" id="customerPhone" placeholder="Number">
                                        </div>
                                        <div class="mb-3">
                                            <label for="deliveryAddress" class="form-label">Delivery Address</label>
                                            <textarea class="form-control" id="deliveryAddress" rows="3" placeholder="Delivery address"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header bg-primary text-white">
                                        Order Summary
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="orderDate" class="form-label">Order Date</label>
                                                <input type="date" class="form-control" id="orderDate">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Courier </label>
                                                <select  name="courier_id"  class="form-control">
                                                    <option value="" selected disabled>Select Courier</option>
                                                    @foreach($couriers as $courier)
                                                        <option value="{{$courier->id}}">{{$courier->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="orderStatus" class="form-label">Order Status</label>
                                                <select class="form-select" id="orderStatus">
                                                    <option value="Pending">Pending</option>
                                                    <option value="Processing">Processing</option>
                                                    <option value="Shipped">Shipped</option>
                                                    <option value="Delivered">Delivered</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="paymentMethod" class="form-label">Payment Method</label>
                                                <select class="form-select" id="paymentMethod">
                                                    <option value="Cash">Cash</option>
                                                    <option value="Card">Card</option>
                                                    <option value="Bkash">Bkash</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="orderStatus" class="form-label">Shipping Total</label>
                                                <input type="text" id="shipping" class="form-control  " value="100" readonly>

                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="paymentMethod" class="form-label">Total Payable </label>
                                                <input type="text" id="totalPayable"  class="form-control " name="total_pay" readonly>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <button type="submit" id="btn" class="btn btn-dark w-100">Create Order</button>

                            </form>
                        </div>

                    </div>
                </div>
            </div>







        </div>
    </div>

@endsection
@push('create_order')
    <script>

        document.addEventListener("DOMContentLoaded", function () {


            const inputQtyElement = document.querySelector('.inputQtyValue');
            const plusBtns = document.querySelectorAll('.qtyPlusBtn');
            const minusBtns = document.querySelectorAll('.qtyMinusBtn');
            //let productTotalElement = document.querySelectorAll('.productTotal');

            const productPrice = document.querySelectorAll('.price').textContent;
           // console.log(productPrice);



            plusBtns.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    const row = this.closest('tr');
                    const price = parseFloat(row.querySelector('.price').textContent);
                    const qtyInput = row.querySelector('.inputQtyValue');
                    let qty  =  parseFloat(qtyInput.value);
                    let productTotal = row.querySelector('.productTotal');
                    //alert(productTotal);
                    let cartId = row.dataset.cartId; //dataset use for data-attribute...
                    //alert(cartId);
                    let cartIndex = row.dataset.index;
                    //alert(cartIndex);


                    if (qty <100) {
                        qty++;
                        qtyInput.value = qty;
                        productTotal.textContent = (qty * price).toFixed(2);

                        //quantity update  db...
                        fetch('/cart/update', {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                            },
                            body: JSON.stringify({
                                cart_id: cartId,
                                qty: qtyInput.value
                            })
                        })
                            .then(res => res.json())
                            .then(data => console.log(data.message))
                            .catch(error => console.error("Error updating cart:", error));


                        //update sub Total ...
                        productSubTotal();
                        //total ...
                        payable();
                    }
                });
            });

            minusBtns.forEach(function (btn) {
                btn.addEventListener('click',function () {
                    //alert(1);
                    const row = this.closest('tr');
                    const price = parseFloat(row.querySelector('.price').textContent);
                    const qtyInput = row.querySelector('.inputQtyValue');
                    let qty  =  parseFloat(qtyInput.value);
                    let productTotal = row.querySelector('.productTotal');
                    let cartId = row.dataset.cartId; //dataset use for data-attribute... catching cart Id..

                    if (qty >1) {
                        qty--;
                        qtyInput.value = qty;
                        productTotal.textContent = (qty * price).toFixed(2);


                        fetch('/cart/update',{
                            method:"POST",
                            headers:{
                                "Content-Type": "application/json",
                                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content

                            },
                            body:JSON.stringify({
                                cart_id: cartId,
                                qty: qtyInput.value
                            })

                         })
                            .then(res => res.json())
                            .then(data => console.log(data.message))
                            .catch(error => console.error("Error updating cart:", error));

                        //update sub Total...
                        productSubTotal();
                        payable();
                    }
                });
            });

            //calculate sub Total ...
            function productSubTotal(){
               let subTotalElement = document.querySelectorAll('.productTotal');
                //console.log(subTotal);

                let total =0;
                let length = subTotalElement.length;
                let subTotal;
                for(let i = 0;i<length;i++){
                    subTotal = parseFloat(subTotalElement[i].textContent);
                    total += subTotal;
                }
               //alert(total);
                document.querySelector('#productSubTotal').textContent = total.toFixed(2);
            }
            productSubTotal();

            //total pay...
            function payable() {
               let productTotal = parseFloat(document.querySelector('#productSubTotal').textContent);
              // alert(productTotal);
                if(productTotal==0){
                    document.querySelector('#totalPayable').value=productTotal.toFixed(2);
                }else{
                    let shipping = document.querySelector('#shipping');
                    let shippingValue = parseFloat(shipping.value);
                    //alert(shippingValue);
                    let total = shippingValue + productTotal;
                    //console.log(total);
                    document.querySelector('#totalPayable').value=total.toFixed(2);
                    // console.log(totalShowElement);

                }

            }
            payable();



        })


    </script>

@endpush

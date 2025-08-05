@extends('website.backend.master')

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
                                                   </tr>
                                                   </thead>
                                                   <tbody id="productRow">
                                                       <tr>
                                                           <td>{{$product->name}}</td>
                                                           <td>{{$product->selling_price}}</td>


                                                           <td>
                                                               <div class="d-flex justify-content-around align-items-center">
                                                                   <button type='button' class="btn btn-sm btn-success " id="qtyPlusBtn">+</button>
                                                                   <input type="number" value="1" id="inputValue" class="form-control form-control-sm  text-center border-0 shadow-none" style="width: 60px;">
                                                                   <button type='button' class="btn btn-sm btn-success " id="qtyMinusBtn">-</button>
                                                               </div>
                                                           </td>




                                                           <td>{{$product->selling_price * 1}}</td>
                                                           <td><img src="{{asset('/backend/upload/images/product/'.$product->image)}}" alt="product image" style="height: 100px;"></td>
                                                       </tr>
                                                   </tbody>

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
                                                           <option value="">{{$courier->name}}</option>
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
                                                   <input type="text" class="form-control " value="100" readonly>

                                               </div>
                                               <div class="col-md-6 mb-3">
                                                   <label for="paymentMethod" class="form-label">Total Payable </label>
                                                   <input type="text" class="form-control totalPayable" name="total_pay" readonly>

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
        const inputValueElement = document.querySelector('#inputValue');
        const plusBtn =  document.querySelector('#qtyPlusBtn');
        const minusBtn =  document.querySelector('#qtyMinusBtn');



          let inputValue = inputValueElement.value;
         // alert(inputValue);
            //increase value...
            plusBtn.addEventListener('click',function () {
                if(inputValue<100){
                    inputValue++;
                    inputValueElement.value = inputValue;
                }
             });
            //decrease value...
            minusBtn.addEventListener('click',function () {
                //alert(inputValue);
                if(inputValue>1){
                    inputValue--;
                    inputValueElement.value = inputValue;
                }
            })



    </script>

@endpush

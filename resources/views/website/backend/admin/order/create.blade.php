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
                                       <div class="card-header bg-dark text-white">
                                           Customer Information
                                       </div>
                                       <div class="card-body">
                                           <div class="mb-3">
                                               <label for="customerName" class="form-label">Customer Name</label>
                                               <input type="text" class="form-control" id="customerName" placeholder="Enter customer's name">
                                           </div>
                                           <div class="mb-3">
                                               <label for="customerPhone" class="form-label">Customer Phone</label>
                                               <input type="tel" class="form-control" id="customerPhone" placeholder="Enter customer's phone number">
                                           </div>
                                           <div class="mb-3">
                                               <label for="deliveryAddress" class="form-label">Delivery Address</label>
                                               <textarea class="form-control" id="deliveryAddress" rows="3" placeholder="Enter delivery address"></textarea>
                                           </div>
                                       </div>
                                   </div>

                                   <div class="card mb-4">
                                       <div class="card-header bg-dark text-white">
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
                                                       <th>Action</th>
                                                   </tr>
                                                   </thead>
                                                   <tbody id="productRow">
                                                       <tr>
                                                           <td><input type="text" class="form-control" placeholder="Product Name"></td>
                                                           <td><input type="number" class="form-control product-price" placeholder="Price"></td>
                                                           <td><input type="number" class="form-control product-qty" placeholder="Qty"></td>
                                                           <td><input type="text" class="form-control product-total" readonly></td>
                                                           <td><button type="button" class="btn btn-danger btn-sm remove-row">Remove</button></td>
                                                       </tr>
                                                   </tbody>
                                                   <tfoot>
                                                        <tr>
                                                            <td colspan="2" > Total</td>
                                                            <td colspan="3"><input type="text" class="form-control all-product-total" readonly></td>



                                                        </tr>
                                                   </tfoot>
                                               </table>
                                           </div>
                                           <button type="button" class="btn btn-primary btn-sm mt-2" id="btnAddNewProduct">Add New Product</button>
                                       </div>
                                   </div>

                                   <div class="card mb-4">
                                       <div class="card-header bg-dark text-white">
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

                                   <button type="submit" id="btn" class="btn btn-success w-100">Create Order</button>

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

        //add New row...

        document.querySelector('#btnAddNewProduct').addEventListener('click',function () {
            //alert('hi');
                let productRowArea = document.querySelector('#productRow');
                //console.log(productRowArea.id);
                let newRow = document.createElement('tr');

                 newRow.innerHTML = `<td><input type="text" class="form-control" placeholder="Product Name"></td>
                                     <td><input type="number" class="form-control product-price" placeholder="Price"></td>
                                     <td><input type="number" class="form-control product-qty" placeholder="Qty"></td>
                                      <td><input type="text" class="form-control product-total" readonly></td>
                                      <td><button type="button" class="btn btn-danger btn-sm remove-row">Remove</button></td> `;

            productRowArea.append(newRow);

        });

        //remove row...
        let productRowArea = document.querySelector('#productRow');

        document.querySelector('#productRow').addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('remove-row')) {
                e.target.closest('tr').remove();


                //update total ...

                let grandTotal = 0;
                document.querySelectorAll('.product-total').forEach(function (input) {
                    grandTotal += parseFloat(input.value) || 0;
                });

                if(grandTotal>0){
                    document.querySelector('.all-product-total').value = grandTotal;
                }else{
                    document.querySelector('.all-product-total').value = 0;
                }


                //update total pay...
                totalPayable();

            }

        })

       //calculate product price...

        document.querySelector('#productRow').addEventListener('input',function(event){
            if (event.target.classList.contains('product-price') || event.target.classList.contains('product-qty')) {
                const row   = event.target.closest('tr');
                const price = row.querySelector('.product-price').value;
                const qty   = row.querySelector('.product-qty').value;
                let total   = price * qty;
                let showTotal = row.querySelector('.product-total');
                showTotal.value = total;

                let grandTotal = 0;
                document.querySelectorAll('.product-total').forEach(function (input) { //inputItem means ek ek ta input  jetgulo .product-total class deya bola
                    grandTotal += parseFloat(input.value);
                });

                document.querySelector('.all-product-total').value = grandTotal;

               //update total pay...
                totalPayable();

            }
        })
        //total Payable ...

        function totalPayable(){
            let grandTotal = 0;
            document.querySelectorAll('.product-total').forEach(function (input) {
                grandTotal += parseFloat(input.value) || 0;
            });
            const shipping = 100;
           let totalPayableAmount = 0
            if(grandTotal>0){
                 totalPayableAmount  = shipping + grandTotal;
            }else{
                 totalPayableAmount  = 0;
            }


            document.querySelector('.totalPayable').value = totalPayableAmount;
            console.log(totalPayableAmount);


        }
        totalPayable();






    </script>

@endpush

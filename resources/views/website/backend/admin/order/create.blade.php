@extends('website.backend.master')

   @section('content')
       <div class="container mt-8">
           <div class="row">


               <div class="col-lg-12 col-md-12">
                   <div class="card">

                       <div class="card-body">
                           <div class="container form-container">
                               <h2 class="mb-4 text-center">Create Manual Order</h2>
                               <form>
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
                                                   <tbody id="product-rows">
                                                   <tr>
                                                       <td><input type="text" class="form-control" placeholder="Product Name"></td>
                                                       <td><input type="number" class="form-control product-price" placeholder="Price"></td>
                                                       <td><input type="number" class="form-control product-qty" placeholder="Qty"></td>
                                                       <td><input type="text" class="form-control product-total" readonly></td>
                                                       <td><button type="button" class="btn btn-danger btn-sm remove-row">Remove</button></td>
                                                   </tr>
                                                   </tbody>
                                               </table>
                                           </div>
                                           <button type="button" class="btn btn-primary btn-sm mt-2" id="add-product-row">Add New Product</button>
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
                                                   <label for="courierName" class="form-label">Courier Name</label>
                                                   <input type="text" class="form-control" id="courierName" placeholder="e.g. Sundarban Courier">
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
                                           <div class="mb-3">
                                               <label for="orderTotal" class="form-label">Order Total</label>
                                               <input type="text" class="form-control" id="orderTotal" readonly>
                                           </div>
                                       </div>
                                   </div>

                                   <button type="submit" class="btn btn-success w-100">Create Order</button>
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
        document.addEventListener('DOMContentLoaded', function () {
            // Function to calculate and update totals
            function updateTotals() {
                let grandTotal = 0;
                document.querySelectorAll('#product-rows tr').forEach(function(row) {
                    const priceInput = row.querySelector('.product-price');
                    const qtyInput = row.querySelector('.product-qty');
                    const totalInput = row.querySelector('.product-total');

                    const price = parseFloat(priceInput.value) || 0;
                    const qty = parseInt(qtyInput.value) || 0;
                    const rowTotal = price * qty;

                    totalInput.value = rowTotal.toFixed(2);
                    grandTotal += rowTotal;
                });
                document.getElementById('orderTotal').value = grandTotal.toFixed(2);
            }

            // Event listeners for calculating totals
            document.getElementById('product-rows').addEventListener('input', function(event) {
                if (event.target.classList.contains('product-price') || event.target.classList.contains('product-qty')) {
                    updateTotals();
                }
            });

            // Add new product row functionality
            document.getElementById('add-product-row').addEventListener('click', function() {
                const productRows = document.getElementById('product-rows');
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td><input type="text" class="form-control" placeholder="Product Name"></td>
                    <td><input type="number" class="form-control product-price" placeholder="Price"></td>
                    <td><input type="number" class="form-control product-qty" placeholder="Qty"></td>
                    <td><input type="text" class="form-control product-total" readonly></td>
                    <td><button type="button" class="btn btn-danger btn-sm remove-row">Remove</button></td>
                `;
                productRows.appendChild(newRow);
                updateTotals();
            });

            // Remove product row functionality
            document.getElementById('product-rows').addEventListener('click', function(event) {
                if (event.target.classList.contains('remove-row')) {
                    event.target.closest('tr').remove();
                    updateTotals();
                }
            });

            // Set current date on load
            const today = new Date();
            const year = today.getFullYear();
            const month = (today.getMonth() + 1).toString().padStart(2, '0');
            const day = today.getDate().toString().padStart(2, '0');
            document.getElementById('orderDate').value = `${year}-${month}-${day}`;

            // Initial calculation
            updateTotals();
        });
    </script>

@endpush

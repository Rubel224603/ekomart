@extends('website.backend.master')

@section('content')
    <!-- Row -->
    <div class="row row-sm mt-8">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-header border-bottom d-flex justify-content-between">
                    <h1 class="card-title display-6 fw-bold text-primary">Order Information </h1>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-nowrap text-md-nowrap table-bordered">
                            <thead>
                                <tr>
                                    <td >Order Id</td>
                                    <td>{{$order->id}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Customer Name</td>
                                    <td><strong>{{$order->customer->full_name}}</strong></td>
                                <tr>
                                <tr>
                                    <td class="fw-bold">Customer Phone</td>
                                    <td><strong>{{$order->customer->phone}}</strong></td>
                                </tr>
                                <tr>
                                    <td >Order Total</td>
                                    <td>{{$order->order_total}}</td>
                                </tr>
                                <tr>
                                    <td >Order Status</td>
                                     <td>{{$order->order_status}}</td>
                                </tr>
                                <tr>
                                    <td  >Order Date</td>
                                    <td>{{$order->order_date}}</td>
                                </tr>

                                <tr>
                                    <td >Delivery Address</td>
                                    <td>{{isset($order->delivery_address)?$order->delivery_address:''}}</td>
                                </tr>
                                <tr>
                                    <td >Delivery date</td>
                                    <td>{{isset($order->delivery_date)?$order->delivery_date:'NA'}}</td>
                                </tr>


                                <tr>
                                    <td>Delivery  Status</td>
                                     <td>{{isset($order->delivery_status)?$order->delivery_status:''}}</td>
                               </tr>
                                <tr>
                                    <td>Courier Name</td>
                                    <td>{{isset($order->courier->name)?$order->courier->name:'NA'}}</td>
                                </tr>

                                <tr>
                                    <td class="fw-bold">Payment Amount</td>
                                     <td>{{$order->payment_amount}}</td>
                               </tr>
                                <tr>
                                    <th class="fw-bold">Payment Method</th>
                                     <td>{{isset($order->payment_method)?$order->payment_method:'NA'}}</td>
                               </tr>
                                <tr>
                                    <td  class="fw-bold">Payment Date</td>
                                     <td>{{isset($order->paryment_date)?$order->paryment_date:'NA'}}</td>
                               </tr>

                            </thead>

                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-header border-bottom d-flex justify-content-between">
                    <h1 class="card-title display-6 fw-bold text-primary">Product Information </h1>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-nowrap text-md-nowrap table-bordered">
                            <thead>

                                <th class="fw-bold">Product Sl</th>
                                <th class="fw-bold">Product  Name</th>
                                <th>Product Price</th>
                                <th>Product qty</th>
                                <th>Product Total</th>

                            </thead>

                            <tbody>
                                @php
                                    $total = 0;
                                @endphp
                                  @foreach($products as $product)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>{{$product->product_price}}</td>
                                        <td>{{$product->product_qty}}</td>
                                        <td>{{$product->product_price * $product->product_qty}}</td>
                                    </tr>
                                      @php
                                        $productTotal =  $product->product_price * $product->product_qty;
                                        $total +=$productTotal;

                                      @endphp
                                  @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4">Product Total</td>
                                    <td >{{$total}}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Row -->
@endsection

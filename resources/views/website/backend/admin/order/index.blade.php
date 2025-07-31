@extends('website.backend.master')

@section('content')
    <!-- Row -->
    <div class="row row-sm mt-8">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-header border-bottom d-flex justify-content-between">
                    <h3 class="card-title">Product List </h3>
                    <a href="{{route('product.create')}}" class="btn btn-primary">Add New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-nowrap text-md-nowrap table-bordered">
                            <thead>
                            <tr>
                                <th  class="fw-bold">Sl</th>
                                <th  class="fw-bold">Customer Name</th>
                                <th  class="fw-bold">Order Total</th>
                                <th  class="fw-bold">Order Status</th>



                                <th class="text-center fw-bold">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <b>{{$order->customer->full_name}}</b> <br>
                                        <b>{{$order->customer->phone}}</b>
                                    </td>
                                    <td>  {{isset($order->order_total) ? $order->order_total: ''}}</td>
                                    <td> {{isset($order->order_status) ? $order->order_status: ''}}</td>



                                    <td class="text-center">
                                        <a href="{{route('product.details',['id'=>$order->id])}}" class="btn btn-primary">View </a>
                                        <a href="{{route('product.edit',['id'=>$order->id])}}" class="btn btn-warning">Edit</a>

                                        <a href="" class="btn btn-primary">Invoice</a>
                                        <a href="" target="_blank" class="btn btn-warning">Print</a>
                                        <a href="{{route('product.delete',['id'=>$order->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure? Delete this!!!')">Delete</a>
                                    </td>

                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
@endsection

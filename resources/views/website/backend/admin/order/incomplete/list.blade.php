@extends('website.backend.master')

@section('content')
    <!-- Row -->
    <div class="row row-sm mt-8">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-header border-bottom d-flex justify-content-between">
                    <h3 class="card-title">Product List </h3>
                    <a href="{{route('admin.order.create')}}" class="btn btn-primary">Add New</a>
                </div>
                <p class="text-center text-primary">{{session('message')}}</p>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-nowrap text-md-nowrap table-bordered">
                            <thead>
                            <tr>
                                <th  class="fw-bold">Sl</th>
                                <th  class="fw-bold">Customer ip</th>
                                <th  class="fw-bold">Product Name </th>
                                <th  class="fw-bold">Product Total </th>




                                <th class="text-center fw-bold">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <b>{{$product->ip_address}}</b> <br>

                                    </td>
                                    <td>   <b>{{$product->product_name}}</b></td>
                                    <td>  {{isset($product->product_total) ? $product->product_total: ''}}</td>




                                    <td class="text-center">
                                        <a href="#" class="btn btn-primary">View </a>

                                        <a href="#" class="btn btn-danger" onclick="return confirm('Are you sure? Delete this!!!')">Delete</a>
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

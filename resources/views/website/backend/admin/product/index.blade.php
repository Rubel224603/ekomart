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
                                <th  class="fw-bold">Product Name</th>
                                <th  class="fw-bold">Category Name</th>
                                <th  class="fw-bold">Subcategory Name</th>


                                <th  class="fw-bold">Status</th>

                                <th class="fw-bold">Image</th>
                                <th class="text-center fw-bold">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>  {{isset($product->category->name) ? $product->category->name: ''}}</td>
                                    <td> {{isset($product->subcategory->name) ? $product->subcategory->name: ''}}</td>



                                    <td>{{$product->published_status == 1?'Published' : "Unpublished"}}</td>

                                    <td><img src="{{asset('backend/upload/images/product/'.$product->image)}}" alt="image here" height="70" width="150" ></td>
                                    <td class="text-center">
                                        <a href="{{route('product.details',['id'=>$product->id])}}" class="btn btn-primary">View </a>
                                        <a href="{{route('product.edit',['id'=>$product->id])}}" class="btn btn-warning">Edit</a>
                                        <a href="{{route('product.delete',['id'=>$product->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure? Delete this!!!')">Delete</a>
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

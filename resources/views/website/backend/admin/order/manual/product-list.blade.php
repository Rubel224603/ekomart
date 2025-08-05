@extends('website.backend.master')

@section('content')
    <div class="container mt-8">
        <div class="row">
            @foreach($products as $product)




                            <div class="card" style="width: 160px !important;">
                                <img src="{{asset('/backend/upload/images/product/'.$product->image)}}" class="card-img-top" alt="product image" style="height: 80px !important;">
                                <div class="card-body">
                                    <span >{{$product->name}}</span>
                                    <p class="card-text">Price ${{$product->selling_price}}</p>
                                    <a href="{{route('admin.order.manual-add',['id'=>$product->id])}}" class="btn btn-primary btn-sm">Add order</a>
                                </div>
                            </div>




            @endforeach
        </div>
    </div>
 @endsection

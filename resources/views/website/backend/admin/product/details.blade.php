@extends('website.backend.master')

@section('content')
    <!-- Row -->

    <div class="container">
        <div class="row">
          <div class="col">
              <div class="card">
                  <div class="card-header text-center d-flex justify-content-between">
                      <h4 class="fw-bold text-center text-success">Product Information</h4>
                      <a href="{{route('product.list')}}" class="btn btn-primary"> Back to Product List</a>
                  </div>

                  <div class="card-datatable table-responsive pt-0">
                      <table class="table table-bordered table-hover ">
                          <tr>
                              <th>Product Id</th>
                              <td>{{$product->id}}</td>
                          </tr>
                          <tr>
                              <th>Product Name</th>
                              <td>{{$product->name}}</td>
                          </tr>
                          <tr>
                              <th>Product Category </th>
                              <td>{{isset($product->category->name) ? $product->category->name: ''}}</td>
                          </tr>
                          <tr>
                              <th>Product Sub Category </th>
                              <td>{{isset($product->subcategory->name) ? $product->subcategory->name :''}}</td>
                          </tr>
                          <tr>
                              <th>Product Brand </th>
                              <td>{{isset($product->brand->name) ? $product->brand->name :''}}</td>
                          </tr>
                          <tr>
                              <th>Product Unit</th>
                              <td>{{isset($product->unit->name)? $product->unit->name:''}}</td>
                          </tr>
                          <tr>
                              <th>Product Regular Price</th>
                              <td>{{$product->product_price}}</td>
                          </tr>
                          <tr>
                              <th>Product Selling Price</th>
                              <td>{{$product->selling_price}}</td>
                          </tr>
                          <tr>
                              <th>Product Stock</th>
                              <td>{{$product->stock}}</td>
                          </tr>
                          <tr>
                              <th>Product Sort description</th>

                              <td>{{$product->sort_description}}</td></td>
                          </tr>
                          <tr>
                              <th>Product Long Description</th>
                              <td>{!!$product->long_description!!}</td>
                          </tr>
                          <tr>
                              <th>Product Image</th>
                              <td><img src="{{asset('backend/upload/images/product/'.$product->image)}}" alt=""  width="360" height="200"></td>
                          </tr>
                          <tr>
                              <th>Other Image</th>
                              <td>
                                  @foreach($product->otherImage as $otherImage)
                                      <img src="{{asset('backend/upload/images/other-image/'.$otherImage->other_image)}}" alt="" width="260" height="100" class="my-1 mx-1">

                                  @endforeach
                              </td>
                          </tr>
                          <tr>
                              <th>Meta title</th>
                              <td>{{$product->meta_title}}</td>

                          </tr>
                          <tr>
                              <th>Meta Description</th>
                              <td>{{$product->meta_description}}</td>
                          </tr>
                          <tr>
                              <th>Product Total views </th>
                              <td>{{$product->hit_count}}</td>
                          </tr>
                          <tr>
                              <th>Product Total Sales</th>
                              <td>{{$product->sales_count}}</td>
                          </tr>
                          <tr>
                              <th>Product Feature Status</th>
                              <td>{{$product->feature_status}}</td>
                          </tr>
                      </table>
                  </div>
              </div>
          </div>
        </div>
    </div>
@endsection

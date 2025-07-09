@extends('website.backend.master')

@section('content')
<!-- Row -->
<div class="row row-sm mt-8">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Category List Table</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-nowrap text-md-nowrap table-bordered">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($brands as $brand)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$brand->brand_name}}</td>
                                <td>{{$brand->status==1?'Published':"Unpublished"}}</td>
                                <td>{{$brand->description}}</td>
                                <td><img src="{{asset('backend/upload/images/brand/'.$brand->image)}}" alt="image here" height="70" width="150" ></td>
                                <td>
                                    <a href="{{route('brand.edit',['id'=>$brand->id])}}" class="btn btn-warning">Edit</a>
                                    <a href="{{route('brand.delete',['id'=>$brand->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure Delete this!!!')">Delete</a>
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

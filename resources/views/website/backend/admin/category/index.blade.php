@extends('website.backend.master')

@section('content')
<!-- Row -->
<div class="row row-sm mt-8">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-header border-bottom d-flex justify-content-between">
                <h3 class="card-title">Sub Category List </h3>
                <a href="{{route('category.create')}}" class="btn btn-primary">Add New</a>
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
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->status==1?'Published':"Unpublished"}}</td>
                                <td>{{$category->description}}</td>
                                <td>
                                    <img src="{{asset('backend/upload/images/category/'.$category->image)}}" alt="image here" height="70" width="150" >
                                    <a href="{{route('category.image.download',['id'=>$category->id])}}" class="btn btn-primary" download>Download</a>
                                </td>
                                <td>
                                    <a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-warning">Edit</a>
                                    <a href="{{route('category.delete',['id'=>$category->id])}}" class="btn btn-danger">Delete</a>
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

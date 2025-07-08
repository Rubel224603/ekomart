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
                <p class="text-muted">Add borders on all sides of the table and cells.</p>
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
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->status==1?'Published':"Unpublished"}}</td>
                                <td>{{$category->description}}</td>
                                <td><img src="{{asset('backend/upload/images/category/'.$category->image)}}" alt="image here" height="70" width="150" ></td>
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

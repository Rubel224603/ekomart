@extends('website.backend.master')

@section('content')
<!-- Row -->
<div class="row row-sm mt-8">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Sub Category List Table</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-nowrap text-md-nowrap table-bordered">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Sub-category</th>
                            <th> Category Id     </th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($subcategories as $subcategory)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$subcategory->sub_category_name}}</td>
                                <td>{{$subcategory->cat_id}}</td>
                                <td>{{$subcategory->status==1?'Published':"Unpublished"}}</td>
                                <td>{{$subcategory->description}}</td>
                                <td><img src="{{asset('backend/upload/images/sub-category/'.$subcategory->image)}}" alt="image here" height="70" width="150" ></td>
                                <td>
                                    <a href="{{route('edit.sub-category',['id'=>$subcategory->id])}}" class="btn btn-warning">Edit</a>
                                    <a href="{{route('delete.sub-category',['id'=>$subcategory->id])}}" class="btn btn-danger">Delete</a>
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

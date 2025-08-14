@extends('website.backend.master')

@section('content')
    <!-- Row -->
    <div class="row row-sm mt-8">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-header border-bottom d-flex justify-content-between">
                    <h3 class="card-title">Admin User List </h3>
{{--                    <a href="{{route('brand.create')}}" class="btn btn-primary">Add New</a>--}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-nowrap text-md-nowrap table-bordered">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>phone</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{isset($user->phone)?$user->phone:'NA'}}</td>
                                    <td><img src="{{asset('backend/upload/images/user/'.$user->image)}}" alt="image here" height="70" width="150" ></td>
                                    <td>
                                        <a href="{{route('admin.user.edit',['id'=>$user->id])}}" class="btn btn-warning">Edit</a>
                                        <a href="{{route('admin.user.delete',['id'=>$user->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure Delete this!!!')">Delete</a>
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

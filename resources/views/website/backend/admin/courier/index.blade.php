@extends('website.backend.master')

@section('content')
    <!-- Row -->
    <div class="row row-sm mt-8">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-header border-bottom d-flex justify-content-between">
                    <h3 class="card-title">Sub Category List </h3>
                    <a href="{{route('courier.add')}}" class="btn btn-primary">Add New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-nowrap text-md-nowrap table-bordered">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Logo</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($couriers as $courier)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$courier->name}}</td>
                                    <td>{{$courier->email}}</td>
                                    <td>{{$courier->mobile}}</td>
                                    <td>{{$courier->address}}</td>
                                    <td>
                                        <img src="{{asset('backend/upload/images/courier/'.$courier->image)}}" alt="image here" height="70" width="150" >
                                    </td>
                                    <td>
                                        <a href="{{route('courier.edit',['id'=>$courier->id])}}" class="btn btn-warning">Edit</a>
                                        <a href="{{route('courier.delete',['id'=>$courier->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure??')">Delete</a>
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

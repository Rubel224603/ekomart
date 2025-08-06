@extends('website.backend.master')

@section('content')
<!-- Row -->
<div class="row row-sm mt-8">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-header border-bottom d-flex justify-content-between">
                <h3 class="card-title">Unit List </h3>
                <a href="{{route('unit.create')}}" class="btn btn-primary">Add New</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-nowrap text-md-nowrap table-bordered">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Status</th>
                            <th>Description</th>

                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($units as $unit)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$unit->name}}</td>
                                <th>{{$unit->code}}</th>
                                <td>{{$unit->status==1?'Published':"Unpublished"}}</td>
                                <td>{{$unit->description}}</td>

                                <td>
                                    <a href="{{route('unit.edit',['id'=>$unit->id])}}" class="btn btn-warning">Edit</a>
                                    <a href="{{route('unit.delete',['id'=>$unit->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure Delete this!!!')">Delete</a>
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

@extends('website.backend.master')

@section('content')
    <div class="container mt-8">
        <div class="row">


            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Courier Create Form</h3>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" id="saveForm" method="post" action ="{{route('courier.update',['id'=>$courier->id])}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-4">
                                <label for="firstName" class="col-md-3 form-label">Courier Name</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="text" name="name" value="{{$courier->name}}" >
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="firstName" class="col-md-3 form-label">Email </label>
                                <div class="col-md-7">
                                    <input class="form-control" placeholder="Email" type="email" name="email" value="{{$courier->email}}">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="firstName" class="col-md-3 form-label">Mobile </label>
                                <div class="col-md-7">
                                    <input class="form-control" id="firstName" placeholder="Mobile" type="text" name="mobile" value="{{$courier->mobile}}">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="email" class="col-md-3 form-label">Address</label>
                                <div class="col-md-7">
                                    <input class="form-control"  placeholder="Address" type="text" name="address" value="{{$courier->address}}">

                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="image" class="col-md-3 form-label">Logo</label>
                                <div class="col-md-7">
                                    <input class="form-control" type="file" name="image">
                                    <br>
                                    <img src="{{asset('backend/upload/images/courier/'.$courier->image)}}" alt="courier image" width="200px" height="120px">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="email" class="col-md-3 form-label"></label>
                                <div class="col-md-7">

                                    <button class="btn btn-primary" type="submit">Update Courier</button>                                   </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>







        </div>
    </div>

@endsection

@extends('website.backend.master')

@section('content')
    <div class="container mt-8">
        <div class="row">


            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">User Edit Form</h3>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action ="{{route('admin.user.update',['id'=>$user->id])}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-4">
                                <label for="firstName" class="col-md-3 form-label">User Name</label>
                                <div class="col-md-7">
                                    <input class="form-control"  type="text" name="name" value="{{$user->name}}" >
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="firstName" class="col-md-3 form-label">Email </label>
                                <div class="col-md-7">
                                    <input class="form-control" placeholder="Email" type="email" name="email" value="{{$user->email}}">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="firstName" class="col-md-3 form-label">Mobile </label>
                                <div class="col-md-7">
                                    <input class="form-control" id="firstName" placeholder="Mobile" type="text" name="phone" value="{{$user->mobile}}">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="email" class="col-md-3 form-label">Address</label>
                                <div class="col-md-7">
                                    <input class="form-control"  placeholder="Address" type="text" name="address" value="{{$user->address}}">

                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="email" class="col-md-3 form-label">Change Password</label>
                                <div class="col-md-7">
                                    <input class="form-control"  placeholder="Old Password" type="text" name="old_password" >
                                    <br>
                                    <input class="form-control"  placeholder="Confirm Password" type="text" name="new_password" >

                                </div>




                            </div>

                            <div class="row mb-4">
                                <label for="image" class="col-md-3 form-label">Logo</label>
                                <div class="col-md-7">
                                    <input class="form-control" type="file" name="image">
                                    <br>
                                    <img src="{{asset('backend/upload/images/user/'.$user->image)}}" alt="User image" width="200px" height="120px">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="email" class="col-md-3 form-label"></label>
                                <div class="col-md-7">

                                    <button class="btn btn-primary" type="submit">Update User</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>







        </div>
    </div>

@endsection

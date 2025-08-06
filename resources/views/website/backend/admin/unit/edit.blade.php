@extends('website.backend.master')

@section('content')
    <div class="container mt-8 ">
        <div class="row">


            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Unit Edit Form</h3>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action ="{{route('unit.update',['id'=>$unit->id])}}" enctype="multipart/form-data" >
                            @csrf
                            <div class="row mb-4">
                                <label for="firstName" class="col-md-3 form-label">Unit Name</label>
                                <div class="col-md-7">
                                    <input class="form-control" id="firstName" value="{{$unit->name}}" type="text" name="name">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="firstName" class="col-md-3 form-label">Unit Code</label>
                                <div class="col-md-7">
                                    <input class="form-control" id="firstName" value="{{$unit->code}}" type="text" name="code">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="" class="col-md-3 form-label">Published Status</label>
                                <div class="d-flex gap-3 col-md-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" value="1" {{$unit->status==1?"checked":""}} >
                                        <label class="form-check-label" for="Published">
                                            Published</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" value="0"{{$unit->status==0?'checked':''}} >
                                        <label class="form-check-label" for="Unpublished">
                                            Unpublished
                                        </label>
                                    </div>
                                </div>


                            </div>
                            <div class="row mb-4">
                                <label for="email" class="col-md-3 form-label">Description</label>
                                <div class="col-md-7">
                                    <input class="form-control"  value="{{$unit->description}}" type="text" name="description">

                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="email" class="col-md-3 form-label"></label>
                                <div class="col-md-7">

                                    <button class="btn btn-primary" type="submit">Update Unit</button>                                   </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>







        </div>
    </div>

@endsection

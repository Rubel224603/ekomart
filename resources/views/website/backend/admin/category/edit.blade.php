@extends('website.backend.master')

@section('content')
    <div class="container mt-8 ">
        <div class="row">


            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Category Create Form</h3>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action ="{{route('category.update',['id'=>$category->id])}}" enctype="multipart/form-data" >
                            @csrf
                            <div class="row mb-4">
                                <label for="firstName" class="col-md-3 form-label">Category Name</label>
                                <div class="col-md-7">
                                    <input class="form-control" id="firstName" value="{{$category->category_name}}" type="text" name="category_name">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="" class="col-md-3 form-label">Published Status</label>
                                <div class="d-flex gap-3 col-md-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" value="1" {{$category->status==1?"checked":""}} >
                                        <label class="form-check-label" for="Published">
                                            Published</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" value="0"{{$category->status==0?'checked':''}} >
                                        <label class="form-check-label" for="Unpublished">
                                            Unpublished
                                        </label>
                                    </div>
                                </div>


                            </div>
                            <div class="row mb-4">
                                <label for="email" class="col-md-3 form-label">Description</label>
                                <div class="col-md-7">
                                    <input class="form-control"  value="{{$category->description}}" type="text" name="description">

                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="image" class="col-md-3 form-label">Image</label>
                                <div class="col-md-7">
                                    <input class="form-control" type="file" name="image">
                                    <img src="{{asset('backend/upload/images/category/'.$category->image)}}" alt="" height="100" width="150" class="">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="email" class="col-md-3 form-label"></label>
                                <div class="col-md-7">

                                    <button class="btn btn-primary" type="submit">Update Category</button>                                   </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>







        </div>
    </div>

@endsection

@extends('website.backend.master')

@section('content')
    <div class="container mt-8">
             @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Product Create Form</h3>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" id="saveForm" method="post" action ="{{route('product.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Product Name</label>
                                <div class="col-md-7">
                                    <input class="form-control"  name="name" placeholder="Product name" type="text"  value="{{ old('name') }}" required >
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="firstName" class="col-md-3 form-label">Select Category</label>
                                <div class="col-md-7">
                                    <select id="" name="category_id" class="form-control" onchange="getCategoryBySubCategory(this.value)" required>
                                        <option  selected disabled>---Select Category---</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="firstName" class="col-md-3 form-label">Select Sub-Category</label>
                                <div class="col-md-7">
                                    <select id="subcategory" name="subcategory_id"  class="form-control">
                                        <option selected disabled>---Select Sub Category---</option>
                                        @foreach($subcategories as $subcategory)
                                            <option value="{{$subcategory->id}}" {{ old('subcategory_id') == $subcategory->id ? 'selected' : '' }}>{{$subcategory->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="firstName" class="col-md-3 form-label">Select Brand</label>
                                <div class="col-md-7">
                                    <select name="brand_id" id="" class="form-control">
                                        <option selected disabled>---Select Brand---</option>
                                       @foreach($brands as $brand)
                                            <option value="{{$brand->id}}" {{ old('brand_id') == $brand->id ? 'selected' : '' }}>{{$brand->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="firstName" class="col-md-3 form-label">Select Unit</label>
                                <div class="col-md-7">
                                    <select name="unit_id" id="" class="form-control">
                                        <option selected disabled> ---Unit Select---</option>
                                      @foreach($units as $unit)
                                            <option value="{{$unit->id}}" {{ old('unit_id') == $unit->id ? 'selected' : '' }}>{{$unit->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="firstName" class="col-md-3 form-label">Product Code</label>
                                <div class="col-md-7">
                                    <input class="form-control" id="firstName" placeholder="Product code" type="text" name="code" value="{{ old('code') }}">
                                </div>
                            </div>


                             <div class="row mb-4">
                                    <label class="col-sm-3 col-form-label" for="basic-default-name">Product  Price</label>
                                    <div class="col-sm-7">
                                        <div class="input-group">
                                            <input type="number" class="form-control"  placeholder="Product Price" name="product_price"  value="{{ old('product_price') }}"/>
                                            <input type="number" class="form-control"  placeholder="Selling price" name="selling_price" value="{{ old('selling_price') }}"/>
                                        </div>
                                    </div>
                             </div>
                            <div class="row mb-4">
                                <label for="firstName" class="col-md-3 form-label">Product Stock Amount</label>
                                <div class="col-md-7">
                                    <input class="form-control" id="firstName" placeholder="Product stock number" type="text" name="stock" value="{{ old('stock') }}"/>
                                </div>
                            </div>


                            <div class="row mb-4">
                                <label for="" class="col-md-3 form-label">Published Status</label>
                                <div class="d-flex gap-3 col-md-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="published_status" value="1" {{ old('published_status') == '1' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="Published">
                                            Published
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="published_status" value="0"  {{ old('published_status') == '0' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="Unpublished">
                                            Unpublished
                                        </label>
                                    </div>
                                </div>


                            </div>
                            <div class="row mb-4">
                                <label for="email" class="col-md-3 form-label">Sort Description</label>
                                <div class="col-md-7">
                                    <input class="form-control"  placeholder="Sort description" type="text" name="sort_description" value="{{ old('sort_description') }}">

                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="email" class="col-md-3 form-label">long Description</label>
                                <div class="col-md-7">
                                    <input class="form-control"  placeholder="Long description" type="text" name="long_description" value="{{ old('long_description') }}">

                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="image" class="col-md-3 form-label">Product Image</label>
                                <div class="col-md-7">
                                    <input class="form-control" type="file" name="image" required>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="image" class="col-md-3 form-label">Product Other Image</label>
                                <div class="col-md-7">
                                    <input class="form-control" type="file" name="other_image[]" multiple required>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="email" class="col-md-3 form-label">Meta Title</label>
                                <div class="col-md-7">
                                    <input class="form-control"  placeholder="Meta title" type="text" name="meta_title" value="{{ old('meta_title') }}">

                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="email" class="col-md-3 form-label">Meta Description</label>
                                <div class="col-md-7">
                                    <input class="form-control"  placeholder="Meta description" type="text" name="meta_description" value="{{ old('meta_description') }}">

                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="email" class="col-md-3 form-label"></label>
                                <div class="col-md-7">

                                    <button class="btn btn-primary" type="submit">Save Product Information</button>                                   </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>







        </div>
    </div>

@endsection

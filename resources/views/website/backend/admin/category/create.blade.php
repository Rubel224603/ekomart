@extends('website.backend.master')

   @section('content')
       <div class="container ">
           <div class="row">


               <div class="col-lg-12 col-md-12">
                   <div class="card">
                       <div class="card-header border-bottom">
                           <h3 class="card-title">Category Create Form</h3>
                       </div>
                       <div class="card-body">
                           <form class="form-horizontal">
                               <div class="row mb-4">
                                   <label for="firstName" class="col-md-3 form-label">Category Name</label>
                                   <div class="col-md-7">
                                       <input class="form-control" id="firstName" placeholder="Enter category name" type="text" name="category_name">
                                   </div>
                               </div>
                               <div class="row mb-4">
                                   <label for="lastName" class="col-md-3 form-label">Status</label>
                                   <div class="d-flex gap-3 col-md-9">
                                       <div class="form-check">
                                           <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                           <label class="form-check-label" for="male">
                                               Published
                                           </label>
                                       </div>

                                       <div class="form-check">
                                           <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                           <label class="form-check-label" for="female">
                                               Unpublished
                                           </label>
                                       </div>
                                   </div>


                               </div>
                               <div class="row mb-4">
                                   <label for="email" class="col-md-3 form-label">Description</label>
                                   <div class="col-md-7">
                                       <input class="form-control" id="email" placeholder="Enter your email" type="text" name="description">
                                   </div>
                               </div>
                               <div class="row mb-4">
                                   <label for="email" class="col-md-3 form-label">Image</label>
                                   <div class="col-md-7">
                                       <input class="form-control" id="email" placeholder="Enter your email" type="file" name="image">
                                   </div>
                               </div>

                               <button class="btn btn-primary" type="submit">Submit</button>
                           </form>
                       </div>
                   </div>
               </div>







           </div>
       </div>

   @endsection

@extends('website.frontend.master')




    <!-- rts header area start -->

    <!-- header style two End -->
    <!-- rts header area end -->
@section('content')
    <!-- rts banner areaas tart -->
    <div class="rts-banner-area rts-section-gap pt_sm--20">
        <div class="container">
            <div class="row g-5 g-sm-4">
                <div class="col-lg-9">
                    <div class="banner-left-five-area-start bg_image">
                        <div class="inner-content-banner-five">
                            <span>Get up to 30% off on your first $150 purchase</span>
                            <h1 class="title">Do not miss our amazing <br>
                                grocery deals</h1>
                            <p>We have prepared special discounts for you on grocery products. Don't miss these opportunities...</p>
                            <a href="{{route('shop')}}" class="rts-btn btn-primary radious-sm with-icon">
                                <div class="btn-text">
                                    Shop Now
                                </div>
                                <div class="arrow-icon">
                                    <i class="fa-light fa-arrow-right"></i>
                                </div>
                                <div class="arrow-icon">
                                    <i class="fa-light fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="banner-five-right-content bg_image">
                        <div class="content-area">
                            <a href="#" class="rts-btn btn-primary">Weekend Discount</a>
                            <h3 class="title">
                                Strawberry Water Drinks
                                <span>Flavors Awesome</span>
                            </h3>
                            <a href="shop-grid-top-filter.html" class="shop-now-goshop-btn">
                                <span class="text">Shop Now</span>
                                <div class="plus-icon">
                                    <i class="fa-sharp fa-regular fa-plus"></i>
                                </div>
                                <div class="plus-icon">
                                    <i class="fa-sharp fa-regular fa-plus"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner areaas end -->



    <!-- rts categorya area start -->
    <div class="rts-category-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cover-card-main-over-white">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="title-area-between">
                                    <h2 class="title-left mb--0">
                                        Featured Categories
                                    </h2>
                                    <div class="next-prev-swiper-wrapper">
                                        <div class="swiper-button-prev"><i class="fa-regular fa-chevron-left"></i></div>
                                        <div class="swiper-button-next"><i class="fa-regular fa-chevron-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- rts category area satart -->
                                <div class="rts-caregory-area-one ">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="category-area-main-wrapper-one">
                                                <div class="swiper mySwiper-category-1 swiper-data" data-swiper='{
                                                    "spaceBetween":15,
                                                    "slidesPerView":8,
                                                    "loop": true,
                                                    "speed": 1000,
                                                    "navigation":{
                                                        "nextEl":".swiper-button-next",
                                                        "prevEl":".swiper-button-prev"
                                                        },
                                                    "breakpoints":{
                                                    "0":{
                                                        "slidesPerView":1,
                                                        "spaceBetween": 15},
                                                    "380":{
                                                        "slidesPerView":2,
                                                        "spaceBetween":15},
                                                    "480":{
                                                        "slidesPerView":3,
                                                        "spaceBetween":15},
                                                    "640":{
                                                        "slidesPerView":4,
                                                        "spaceBetween":15},
                                                    "840":{
                                                        "slidesPerView":6,
                                                        "spaceBetween":15},
                                                    "1140":{
                                                        "slidesPerView":8,
                                                        "spaceBetween":15}
                                                    }
                                                }'>

                                                    <div class="swiper-wrapper">

                                                        @foreach($categories as $category)

                                                            <!-- single swiper start -->
                                                            @foreach($category->products as $product)
                                                                <div class="swiper-slide">
                                                                    <div class="single-category-one height-230">
                                                                        <a href="{{route('shop-product.details',$product->slug)}}" class="thumbnail">
                                                                            <img src="{{asset('backend/upload/images/product/'.$product->image)}}" alt="category">
                                                                        </a>
                                                                        <div class="inner-content-category">
                                                                            <a href="{{route('shop-product.details',$product->slug)}}"> <span>{{$product->name}}</span></a>
                                                                            <span>{{$product->stock}} Items</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                            <!-- single swiper start -->

                                                         @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- rts category area end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- rts categorya area end -->

    <!-- rts feature product 2 area start -->
    <div class="rts-feature-large-product-area rts-section-gapBottom">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="feature-product-area-large-2 bg_image">
                        <div class="inner-feature-product-content">
                            <span>Weekend Discount</span>
                            <h2 class="title">
                                Feed The Best Energy <br>
                                Drink Booster
                            </h2>
                            <p>Just don’t miss the special offer this week</p>
                            <a href="shop-grid-top-filter.html" class="rts-btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-product-area-large-2 bg_2 bg_image">
                        <div class="inner-feature-product-content">
                            <span>Weekend Discount</span>
                            <h2 class="title">
                                Our Garden Fresh <br>
                                Vegetables
                            </h2>
                            <p>Just don’t miss the special offer this week</p>
                            <a href="shop-grid-top-filter.html" class="rts-btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts feature product 2 area end -->

    <!-- popular -product wrapper 7 -->
    <div class="popular-product-col-7-area rts-section-gapBottom">
        <div class="container cover-card-main-over-white mt--60 ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-between mb--15">
                        <h2 class="title-left">
                            Popular Products
                        </h2>
                        <ul class="nav nav-tabs best-selling-grocery" id="myTab" role="tablist">
                            @foreach($categories as $key=>$category)


                                <li class="nav-item" role="presentation">
                                    <button class="nav-link {{$key== 0? 'active':''}}" id="home-tab" data-bs-toggle="tab" data-bs-target="#home{{$key}}" type="button" role="tab" aria-controls="home" aria-selected="true">
                                        {{$category->name}}</button>
                                </li>

                            @endforeach

                        </ul>



                    </div>
                </div>
            </div>
            <div class="row plr--30 plr_sm--5">
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        <!-- first tabs area start-->
                        @foreach($categories as $key1 => $category)

                            <div class="tab-pane fade show {{$key1==0?'active':''}}" id="home{{$key1}}" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row g-4 mt--0">
                                    @foreach($category->products as $product)
                                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                                            <div class="single-shopping-card-one deals-of-day">
                                                <div class="image-and-action-area-wrapper">
                                                    <a href="{{route('shop-product.details',['slug'=>$product->slug])}}" class="thumbnail-preview">
                                                        <img src="{{asset('backend/upload/images/product/'.$product->image)}}" alt="grocery"  style="width:250px !important; height:180px !important;">
                                                    </a>
                                                    <div class="action-share-option">
                                                        <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                            <i class="fa-light fa-heart"></i>
                                                        </div>
                                                        <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <i class="fa-solid fa-arrows-retweet"></i>
                                                        </div>
                                                        <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                            <i class="fa-regular fa-eye"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="body-content">

                                                    <div class="start-area-rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <a href="{{route('shop-product.details',$product->slug)}}">
                                                        <h4 class="title">{{$product->name}}</h4>
                                                    </a>
                                                    <span class="availability">500g Pack</span>
                                                    <div class="price-area">
                                                        <span class="current">{{$product->selling_price}}</span>
                                                        <div class="previous">{{$product->product_price}}</div>
                                                    </div>
                                                   <form action="{{route('cart.store',['id'=>$product->id])}}" method="post" enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="cart-counter-action">
                                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                            <button  class="rts-btn btn-primary radious-sm with-icon">
                                                                <div class="btn-text">
                                                                    Add To Cart
                                                                </div>
                                                                <div class="arrow-icon">
                                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                                </div>
                                                                <div class="arrow-icon">
                                                                    <i class="fa-regular fa-cart-shopping"></i>
                                                                </div>
                                                            </button>
                                                        </div>
                                                  </form>

                                                </div>
                                            </div>
                                        </div>


                                    @endforeach


                                </div>
                            </div>
                            <!-- first tabs area start-->


                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular -product wrapper 7 end -->




    <!-- tranding items tabs areas tart -->
    <div class="tranding-items-tab-area-start rts-section-gap  bg_gradient-tranding-items">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-between pl--0">
                        <h2 class="title-left mb--0">
                            Trending items
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row g-5 tranding-items-wrapper-padding-bg-wrapper-list-tabs margin-decrease-y">
                <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="d-flex align-items-start">
                        <div class="nav main-nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            @foreach($subcategori as $subkey=>$subcategory)

                                <button class="nav-link {{$subkey == 0? 'active': ''}}" id="v-pills-home{{$subkey}}-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home{{$subkey}}" type="button" role="tab" aria-controls="v-pills-home{{$subkey}}" aria-selected="true">
                                    {{$subcategory->name}}</button>

                            @endforeach

                        </div>
                    </div>
                </div>



                <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="add-in-tranding-items-area">
                        <img src="{{asset('/website/assets')}}/images/feature/04.jpg" alt="">
                        <div class="content-area">
                            <h3 class="title"> Discover  <br>Real organic <br>Flavors Vegetable</h3>
                            <a href="#" class="shop-now-goshop-btn">
                                <span class="text">Shop Now</span>
                                <div class="plus-icon">
                                    <i class="fa-sharp fa-regular fa-plus"></i>
                                </div>
                                <div class="plus-icon">
                                    <i class="fa-sharp fa-regular fa-plus"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>





                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="tab-content" id="v-pills-tabContent">


                       @foreach($subcategori as $subkey1=>$subcategory)
                            <div class="tab-pane fade show {{$subkey1== 0? 'active': ''}}" id="v-pills-home{{$subkey1}}" role="tabpanel" aria-labelledby="v-pills-home{{$subkey1}}-tab" tabindex="0">

                                <div class="row g-4">
                                    @foreach($subcategory->products as $product)
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="single-shopping-card-one deals-of-day">
                                                <div class="image-and-action-area-wrapper">
                                                    <a href="{{route('shop-product.details',$product->slug)}}" class="thumbnail-preview">
                                                        <img src="{{asset('backend/upload/images/product/'.$product->image)}}" alt="grocery" style="width:250px !important; height:180px !important;">
                                                    </a>
                                                    <div class="action-share-option">
                                                        <div class="single-action openuptip message-show-action" data-flow="up" title="Add To Wishlist">
                                                            <i class="fa-light fa-heart"></i>
                                                        </div>
                                                        <div class="single-action openuptip" data-flow="up" title="Compare" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <i class="fa-solid fa-arrows-retweet"></i>
                                                        </div>
                                                        <div class="single-action openuptip cta-quickview product-details-popup-btn" data-flow="up" title="Quick View">
                                                            <i class="fa-regular fa-eye"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="body-content">
                                                    <div class="start-area-rating">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <a href="{{route('shop-product.details',$product->slug)}}">
                                                        <h4 class="title">{{$product->name}}</h4>
                                                    </a>
                                                    <span class="availability">500g Pack</span>
                                                    <div class="price-area">
                                                        <span class="current">{{$product->selling_price}}</span>
                                                        <div class="previous">{{$product->product_price}}</div>
                                                    </div>

                                                    <div class="cart-counter-action">
                                                        <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                                            <div class="btn-text">
                                                                Add To Cart
                                                            </div>
                                                            <div class="arrow-icon">
                                                                <i class="fa-regular fa-cart-shopping"></i>
                                                            </div>
                                                            <div class="arrow-icon">
                                                                <i class="fa-regular fa-cart-shopping"></i>
                                                            </div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    @endforeach
                                </div>
                            </div>

                       @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tranding items tabs areas end -->





    <!-- four feature areas start -->
    <div class="four-feature-in-one rts-section-gapBottom">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3">
                    <!-- single four feature -->
                    <div class="feature-product-list-wrapper">
                        <div class="title-area">
                            <h2 class="title">
                                Recently Added
                            </h2>
                        </div>
                        @foreach($recentProducts as $product)
                            <div class="single-product-list">
                                <a href="{{route('shop-product.details',$product->slug)}}" class="thumbnail">
                                    <img src="{{asset('/backend/upload/images/product/'.$product->image)}}" alt="product" style=" height: 110px !important;">
                                </a>
                                <div class="body-content">
                                <div class="top">
                                    <div class="stars-area">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <a href="{{route('shop-product.details',$product->slug)}}">
                                        <h4 class="title">{{$product->name}}</h4>
                                    </a>
                                    <div class="price-area">
                                        <span class="current">${{$product->selling_price}}</span>
                                        <div class="previous">${{$product->product_price}}</div>
                                    </div>

                                    <form action="{{route('cart.store',['id'=>$product->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf


                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <button  class="btn btn-success mt-1" style="font-size: 10px; height: 27px; width: 69px !important;">Add to Cart</button>


                                    </form>







                                </div>
                            </div>
                            </div>

                        @endforeach

                    </div>
                    <!-- single four feature end -->
                </div>
                <div class="col-lg-3">
                    <!-- single four feature -->
                    <div class="feature-product-list-wrapper">
                        <div class="title-area">
                            <h2 class="title">
                                Top Rated
                            </h2>
                        </div>
                        @foreach($topRatedProducts as $product)
                            <div class="single-product-list">

                                <a href="{{route('shop-product.details',$product->slug)}}" class="thumbnail">
                                    <img src="{{asset('/backend/upload/images/product/'.$product->image)}}" alt="product" style=" height: 110px !important;" >
                                </a>

                                <div class="body-content">
                                      <div class="top">
                                        <div class="stars-area">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <a href="{{route('shop-product.details',$product->slug)}}">
                                            <h4 class="title">{{$product->name}}</h4>
                                        </a>
                                        <div class="price-area">
                                            <span class="current">${{$product->selling_price}}</span>
                                            <div class="previous">$ {{$product->product_price}}</div>
                                        </div>
                                          <form action="{{route('cart.store',['id'=>$product->id])}}" method="post" enctype="multipart/form-data">
                                              @csrf


                                              <input type="hidden" name="product_id" value="{{ $product->id }}">
                                              <button  class="btn btn-success mt-1" style="font-size: 10px; height: 27px; width: 69px !important;">Add to Cart</button>


                                          </form>
                                    </div>
                                </div>
                        </div>
                        @endforeach

                    </div>
                    <!-- single four feature end -->
                </div>
                <div class="col-lg-3">
                    <!-- single four feature -->
                    <div class="feature-product-list-wrapper">
                        <div class="title-area">
                            <h2 class="title">
                                Top Selling
                            </h2>
                        </div>
                       @foreach($topSellingProducts as $product)
                        <div class="single-product-list">

                            <a href="{{route('shop-product.details',$product->slug)}}" class="thumbnail">
                                <img src="{{asset('/backend/upload/images/product/'.$product->image)}}" alt="product" style=" height:110px !important;">

                            </a>
                            <div class="body-content">
                                <div class="top">
                                    <div class="stars-area">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                    <a href="{{route('shop-product.details',$product->slug)}}">
                                        <h4 class="title">{{$product->name}}</h4>
                                    </a>
                                    <div class="price-area">
                                        <span class="current">{{$product->selling_price}}</span>
                                        <div class="previous">{{$product->product_price}}</div>
                                    </div>
                                    <form action="{{route('cart.store',['id'=>$product->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf


                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <button  class="btn btn-success mt-1" style="font-size: 10px; height: 27px !important; width: 69px !important;">Add to Cart</button>


                                    </form>



                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <!-- single four feature end -->
                </div>
                <div class="col-lg-3">

                    <!-- single four feature -->
                    <div class="feature-product-list-wrapper">
                        <div class="title-area">
                            <h2 class="title">
                               Top Views
                            </h2>
                        </div>

                        @foreach($topViewProducts as $product)
                        <div class="single-product-list">
                            <a href="{{route('shop-product.details',$product->slug)}}" class="thumbnail">
                                <img src="{{asset('/backend/upload/images/product/'.$product->image)}}" class="" alt="product" style=" height: 110px !important;">
                            </a>
                            <div class="body-content">
                                <div class="top">
                                    <div class="stars-area">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <a href="{{route('shop-product.details',$product->slug)}}">
                                        <h4 class="title">{{$product->name}}</h4>
                                    </a>
                                    <div class="price-area">
                                        <span class="current"> {{$product->selling_price}} </span>
                                        <div class="previous">{{$product->product_price}}</div>
                                    </div>
                                    <form action="{{route('cart.store',['id'=>$product->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf


                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <button  class="btn btn-success mt-1" style="font-size: 10px; height: 27px; width: 69px !important;">Add to Cart</button>


                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <!-- single four feature end -->
                </div>
            </div>
        </div>
    </div>
    <!-- four feature areas end -->


    <div class="rts-shorts-service-area rts-section-gap bg_heading">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- single service area start -->
                    <div class="single-short-service-area-start">
                        <div class="icon-area">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="40" cy="40" r="40" fill="white"/>
                                <path d="M55.7029 25.2971C51.642 21.2363 46.2429 19 40.5 19C34.7571 19 29.358 21.2363 25.2971 25.2971C21.2364 29.358 19 34.7571 19 40.5C19 46.2429 21.2364 51.642 25.2971 55.7029C29.358 59.7637 34.7571 62 40.5 62C46.2429 62 51.642 59.7637 55.7029 55.7029C59.7636 51.642 62 46.2429 62 40.5C62 34.7571 59.7636 29.358 55.7029 25.2971ZM40.5 59.4805C30.0341 59.4805 21.5195 50.9659 21.5195 40.5C21.5195 30.0341 30.0341 21.5195 40.5 21.5195C50.9659 21.5195 59.4805 30.0341 59.4805 40.5C59.4805 50.9659 50.9659 59.4805 40.5 59.4805Z" fill="#629D23"/>
                                <path d="M41.8494 39.2402H39.1506C37.6131 39.2402 36.3623 37.9895 36.3623 36.452C36.3623 34.9145 37.6132 33.6638 39.1506 33.6638H44.548C45.2438 33.6638 45.8078 33.0997 45.8078 32.404C45.8078 31.7083 45.2438 31.1442 44.548 31.1442H41.7598V28.3559C41.7598 27.6602 41.1957 27.0962 40.5 27.0962C39.8043 27.0962 39.2402 27.6602 39.2402 28.3559V31.1442H39.1507C36.2239 31.1442 33.8429 33.5253 33.8429 36.452C33.8429 39.3787 36.224 41.7598 39.1507 41.7598H41.8495C43.3869 41.7598 44.6377 43.0106 44.6377 44.548C44.6377 46.0855 43.3869 47.3363 41.8495 47.3363H36.452C35.7563 47.3363 35.1923 47.9004 35.1923 48.5961C35.1923 49.2918 35.7563 49.8559 36.452 49.8559H39.2402V52.6442C39.2402 53.34 39.8043 53.904 40.5 53.904C41.1957 53.904 41.7598 53.34 41.7598 52.6442V49.8559H41.8494C44.7761 49.8559 47.1571 47.4747 47.1571 44.548C47.1571 41.6214 44.7761 39.2402 41.8494 39.2402Z" fill="#629D23"/>
                            </svg>

                        </div>
                        <div class="information">
                            <h4 class="title">Best Prices & Offers</h4>
                            <p class="disc">
                                We prepared special discounts you on grocery products.
                            </p>
                        </div>
                    </div>
                    <!-- single service area end -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- single service area start -->
                    <div class="single-short-service-area-start">
                        <div class="icon-area">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="40" cy="40" r="40" fill="white"/>
                                <path d="M55.5564 24.4436C51.4012 20.2884 45.8763 18 40 18C34.1237 18 28.5988 20.2884 24.4436 24.4436C20.2884 28.5988 18 34.1237 18 40C18 45.8763 20.2884 51.4012 24.4436 55.5564C28.5988 59.7116 34.1237 62 40 62C45.8763 62 51.4012 59.7116 55.5564 55.5564C59.7116 51.4012 62 45.8763 62 40C62 34.1237 59.7116 28.5988 55.5564 24.4436ZM40 59.4219C29.2907 59.4219 20.5781 50.7093 20.5781 40C20.5781 29.2907 29.2907 20.5781 40 20.5781C50.7093 20.5781 59.4219 29.2907 59.4219 40C59.4219 50.7093 50.7093 59.4219 40 59.4219Z" fill="#629D23"/>
                                <path d="M42.4009 34.7622H35.0294L36.295 33.4966C36.7982 32.9934 36.7982 32.177 36.295 31.6738C35.7914 31.1703 34.9753 31.1703 34.4718 31.6738L31.0058 35.1398C30.5022 35.6434 30.5022 36.4594 31.0058 36.9626L34.4718 40.429C34.7236 40.6808 35.0536 40.8067 35.3832 40.8067C35.7132 40.8067 36.0432 40.6808 36.295 40.429C36.7982 39.9255 36.7982 39.1094 36.295 38.6059L35.0291 37.3403H42.4009C44.8229 37.3403 46.7934 39.3108 46.7934 41.7328C46.7934 44.1549 44.8229 46.1254 42.4009 46.1254H37.8925C37.1805 46.1254 36.6035 46.7028 36.6035 47.4145C36.6035 48.1265 37.1805 48.7035 37.8925 48.7035H42.4009C46.2446 48.7035 49.3716 45.5765 49.3716 41.7328C49.3716 37.8892 46.2446 34.7622 42.4009 34.7622Z" fill="#629D23"/>
                            </svg>

                        </div>
                        <div class="information">
                            <h4 class="title">100% Return Policy</h4>
                            <p class="disc">
                                We prepared special discounts you on grocery products.
                            </p>
                        </div>
                    </div>
                    <!-- single service area end -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- single service area start -->
                    <div class="single-short-service-area-start">
                        <div class="icon-area">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="40" cy="40" r="40" fill="white"/>
                                <path d="M26.2667 26.2667C29.935 22.5983 34.8122 20.5781 40 20.5781C43.9672 20.5781 47.8028 21.7849 51.0284 24.0128L48.5382 24.2682L48.8013 26.8328L55.5044 26.1453L54.8169 19.4422L52.2522 19.7053L52.4751 21.8787C48.8247 19.3627 44.4866 18 40 18C34.1236 18 28.5989 20.2884 24.4437 24.4437C20.2884 28.5989 18 34.1236 18 40C18 44.3993 19.2946 48.6457 21.7437 52.28L23.8816 50.8393C23.852 50.7952 23.8232 50.7508 23.7939 50.7065C21.69 47.5289 20.5781 43.8307 20.5781 40C20.5781 34.8123 22.5983 29.935 26.2667 26.2667Z" fill="#629D23"/>
                                <path d="M58.2564 27.72L56.1184 29.1607C56.148 29.2047 56.1768 29.2493 56.2061 29.2935C58.3099 32.4711 59.4219 36.1693 59.4219 40C59.4219 45.1878 57.4017 50.065 53.7333 53.7333C50.0651 57.4017 45.1879 59.4219 40 59.4219C36.0328 59.4219 32.1972 58.2151 28.9716 55.9872L31.4618 55.7318L31.1987 53.1672L24.4956 53.8547L25.1831 60.5578L27.7478 60.2947L27.5249 58.1213C31.1754 60.6373 35.5135 62 40 62C45.8764 62 51.4011 59.7116 55.5564 55.5563C59.7117 51.4011 62 45.8764 62 40C62 35.6007 60.7055 31.3543 58.2564 27.72Z" fill="#629D23"/>
                                <path d="M28.7407 42.7057L30.4096 41.1632C31.6739 40 31.9142 39.2161 31.9142 38.3564C31.9142 36.7127 30.5108 35.6633 28.4753 35.6633C26.7305 35.6633 25.4788 36.3966 24.8087 37.5093L26.6673 38.546C27.0213 37.9771 27.6029 37.6863 28.2477 37.6863C29.0063 37.6863 29.3856 38.0276 29.3856 38.5966C29.3856 38.9633 29.2845 39.3679 28.5764 40.0254L25.2639 43.123V44.6907H32.1544V42.7057L28.7407 42.7057Z" fill="#629D23"/>
                                <path d="M40.1076 42.9965H41.4224V41.0115H40.1076V39.507H37.7433V41.0115H35.948L39.5512 35.8404H36.9594L32.9894 41.3655V42.9965H37.6674V44.6906H40.1076V42.9965Z" fill="#629D23"/>
                                <path d="M43.6986 45.955L47.8708 34.045H45.7341L41.5618 45.955H43.6986Z" fill="#629D23"/>
                                <path d="M49.995 39.1908V37.8254H52.3213L49.3375 44.6906H52.0685L55.1913 37.4081V35.8404H47.8582V39.1908H49.995Z" fill="#629D23"/>
                            </svg>

                        </div>
                        <div class="information">
                            <h4 class="title">Support 24/7</h4>
                            <p class="disc">
                                We prepared special discounts you on grocery products.
                            </p>
                        </div>
                    </div>
                    <!-- single service area end -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- single service area start -->
                    <div class="single-short-service-area-start">
                        <div class="icon-area">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="40" cy="40" r="40" fill="white"/>
                                <path d="M57.0347 37.5029C54.0518 29.3353 48.6248 23.7668 48.3952 23.5339L46.2276 21.3333V29.6016C46.2276 30.3124 45.658 30.8906 44.9578 30.8906C44.2577 30.8906 43.688 30.3124 43.688 29.6016C43.688 23.2045 38.5614 18 32.26 18H30.9902V19.2891C30.9902 25.3093 27.0988 29.646 24.1414 35.2212C21.1581 40.8449 21.3008 47.7349 24.5138 53.2021C27.7234 58.6637 33.5291 62 39.7786 62H40.3686C46.1822 62 51.6369 59.1045 54.9597 54.2545C58.2819 49.4054 59.056 43.0371 57.0347 37.5029ZM52.8748 52.7824C50.0265 56.9398 45.3513 59.4219 40.3686 59.4219H39.7786C34.4416 59.4219 29.4281 56.5325 26.6947 51.8813C23.9369 47.1886 23.8153 41.2733 26.3773 36.4436C29.1752 31.1691 32.9752 26.8193 33.4744 20.662C37.803 21.265 41.1483 25.0441 41.1483 29.6015C41.1483 31.7338 42.8572 33.4687 44.9577 33.4687C47.0581 33.4687 48.767 31.7338 48.767 29.6015V27.9161C50.54 30.2131 53.0138 33.9094 54.6534 38.399C56.3856 43.1416 55.704 48.653 52.8748 52.7824Z" fill="#629D23"/>
                                <path d="M38.6089 40C38.6089 37.8676 36.9 36.1328 34.7996 36.1328C32.6991 36.1328 30.9902 37.8676 30.9902 40C30.9902 42.1324 32.6991 43.8672 34.7996 43.8672C36.9 43.8672 38.6089 42.1324 38.6089 40ZM33.5298 40C33.5298 39.2892 34.0994 38.7109 34.7996 38.7109C35.4997 38.7109 36.0693 39.2892 36.0693 40C36.0693 40.7108 35.4997 41.2891 34.7996 41.2891C34.0994 41.2891 33.5298 40.7108 33.5298 40Z" fill="#629D23"/>
                                <path d="M44.9578 46.4453C42.8573 46.4453 41.1485 48.1801 41.1485 50.3125C41.1485 52.4449 42.8573 54.1797 44.9578 54.1797C47.0583 54.1797 48.7672 52.4449 48.7672 50.3125C48.7672 48.1801 47.0583 46.4453 44.9578 46.4453ZM44.9578 51.6016C44.2577 51.6016 43.688 51.0233 43.688 50.3125C43.688 49.6017 44.2577 49.0234 44.9578 49.0234C45.658 49.0234 46.2276 49.6017 46.2276 50.3125C46.2276 51.0233 45.658 51.6016 44.9578 51.6016Z" fill="#629D23"/>
                                <path d="M32.5466 52.0632L45.2407 36.599L47.1911 38.249L34.4969 53.7132L32.5466 52.0632Z" fill="#629D23"/>
                            </svg>
                        </div>
                        <div class="information">
                            <h4 class="title">Great Offer Daily Deal</h4>
                            <p class="disc">
                                We prepared special discounts you on grocery products.
                            </p>
                        </div>
                    </div>
                    <!-- single service area end -->
                </div>
            </div>
        </div>
    </div>




    <!-- rts blog area start -->
    <div class="rts-blog-area rts-section-gap bg_gradient-tranding-items">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-between pl--0">
                        <h2 class="title-left mb--0">
                            Latest Blog Post Insights
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- single blog area start -->
                    <div class="single-blog-style-card-border">
                        <a href="blog-details.html" class="thumbnail">
                            <img src="{{asset('/')}}website/assets/images/blog/05.jpg" alt="blog-area">
                        </a>
                        <div class="inner-content-body">
                            <div class="tag-area">
                                <div class="single">
                                    <i class="fa-light fa-clock"></i>
                                    <span>15 Sep, 2023</span>
                                </div>
                                <div class="single">
                                    <i class="fa-light fa-folder"></i>
                                    <span>Modern Fashion</span>
                                </div>
                            </div>
                            <a class="title-main" href="blog-details.html">
                                <h3 class="title">
                                    Fashion Fixation: Fueling Your Passion for
                                    All Things Stylish
                                </h3>
                            </a>
                            <div class="button-area">
                                <a href="blog-details.html" class="rts-btn btn-primary radious-sm with-icon">
                                    <div class="btn-text">
                                        Read Details
                                    </div>
                                    <div class="arrow-icon">
                                        <i class="fa-solid fa-circle-plus"></i>
                                    </div>
                                    <div class="arrow-icon">
                                        <i class="fa-solid fa-circle-plus"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single blog area end -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- single blog area start -->
                    <div class="single-blog-style-card-border">
                        <a href="blog-details.html" class="thumbnail">
                            <img src="{{asset('/')}}website/assets/images/blog/06.jpg" alt="blog-area">
                        </a>
                        <div class="inner-content-body">
                            <div class="tag-area">
                                <div class="single">
                                    <i class="fa-light fa-clock"></i>
                                    <span>15 Sep, 2023</span>
                                </div>
                                <div class="single">
                                    <i class="fa-light fa-folder"></i>
                                    <span>Modern Fashion</span>
                                </div>
                            </div>
                            <a class="title-main" href="blog-details.html">
                                <h3 class="title">
                                    Fashion Fixation: Fueling Your Passion for
                                    All Things Stylish
                                </h3>
                            </a>
                            <div class="button-area">
                                <a href="blog-details.html" class="rts-btn btn-primary radious-sm with-icon">
                                    <div class="btn-text">
                                        Read Details
                                    </div>
                                    <div class="arrow-icon">
                                        <i class="fa-solid fa-circle-plus"></i>
                                    </div>
                                    <div class="arrow-icon">
                                        <i class="fa-solid fa-circle-plus"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single blog area end -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- single blog area start -->
                    <div class="single-blog-style-card-border">
                        <a href="blog-details.html" class="thumbnail">
                            <img src="{{asset('/')}}website/assets/images/blog/07.jpg" alt="blog-area">
                        </a>
                        <div class="inner-content-body">
                            <div class="tag-area">
                                <div class="single">
                                    <i class="fa-light fa-clock"></i>
                                    <span>15 Sep, 2023</span>
                                </div>
                                <div class="single">
                                    <i class="fa-light fa-folder"></i>
                                    <span>Modern Fashion</span>
                                </div>
                            </div>
                            <a class="title-main" href="blog-details.html">
                                <h3 class="title">
                                    Fashion Fixation: Fueling Your Passion for
                                    All Things Stylish
                                </h3>
                            </a>
                            <div class="button-area">
                                <a href="blog-details.html" class="rts-btn btn-primary radious-sm with-icon">
                                    <div class="btn-text">
                                        Read Details
                                    </div>
                                    <div class="arrow-icon">
                                        <i class="fa-solid fa-circle-plus"></i>
                                    </div>
                                    <div class="arrow-icon">
                                        <i class="fa-solid fa-circle-plus"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single blog area end -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <!-- single blog area start -->
                    <div class="single-blog-style-card-border">
                        <a href="blog-details.html" class="thumbnail">
                            <img src="{{asset('/')}}website/assets/images/blog/08.jpg" alt="blog-area">
                        </a>
                        <div class="inner-content-body">
                            <div class="tag-area">
                                <div class="single">
                                    <i class="fa-light fa-clock"></i>
                                    <span>15 Sep, 2023</span>
                                </div>
                                <div class="single">
                                    <i class="fa-light fa-folder"></i>
                                    <span>Modern Fashion</span>
                                </div>
                            </div>
                            <a class="title-main" href="blog-details.html">
                                <h3 class="title">
                                    Fashion Fixation: Fueling Your Passion for
                                    All Things Stylish
                                </h3>
                            </a>
                            <div class="button-area">
                                <a href="blog-details.html" class="rts-btn btn-primary radious-sm with-icon">
                                    <div class="btn-text">
                                        Read Details
                                    </div>
                                    <div class="arrow-icon">
                                        <i class="fa-solid fa-circle-plus"></i>
                                    </div>
                                    <div class="arrow-icon">
                                        <i class="fa-solid fa-circle-plus"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single blog area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts blog area end -->












    <!-- modal -->
{{--    <div id="myModal-1" class="modal fade" role="dialog">--}}
{{--        <div class="modal-dialog bg_image">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <button type="button" class="close" data-bs-dismiss="modal"><i class="fa-light fa-x"></i></button>--}}
{{--                </div>--}}
{{--                <div class="modal-body text-center">--}}
{{--                    <div class="inner-content">--}}
{{--                        <div class="content">--}}
{{--                            <span class="pre-title">Get up to 30% off on your first $150 purchase</span>--}}
{{--                            <h1 class="title">Feed Your Family at the  <br>--}}
{{--                                Best Price</h1>--}}
{{--                            <p class="disc">--}}
{{--                                We have prepared special discounts for you on grocery products. Don't <br> miss these opportunities...--}}
{{--                            </p>--}}
{{--                            <div class="rts-btn-banner-area">--}}
{{--                                <a href="#" class="rts-btn btn-primary radious-sm with-icon">--}}
{{--                                    <div class="btn-text">--}}
{{--                                        Shop Now--}}
{{--                                    </div>--}}
{{--                                    <div class="arrow-icon">--}}
{{--                                        <i class="fa-light fa-arrow-right"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="arrow-icon">--}}
{{--                                        <i class="fa-light fa-arrow-right"></i>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <div class="price-area">--}}
{{--                                        <span>--}}
{{--                                            from--}}
{{--                                        </span>--}}
{{--                                    <h3 class="title animated fadeIn">$80.99</h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div class="product-details-popup-wrapper">
        <div class="rts-product-details-section rts-product-details-section2 product-details-popup-section">
            <div class="product-details-popup">
                <button class="product-details-close-btn"><i class="fal fa-times"></i></button>
                <div class="details-product-area">
                    <div class="product-thumb-area">
                        <div class="cursor"></div>
                        <div class="thumb-wrapper one filterd-items figure">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                 style="background-image: url({{asset('/')}}website/assets/images/products/product-details.jpg)"><img
                                    src="{{asset('/')}}website/assets/images/products/product-details.jpg" alt="product-thumb">
                            </div>
                        </div>
                        <div class="thumb-wrapper two filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                 style="background-image: url({{asset('/')}}website/assets/images/products/product-filt2.jpg)"><img
                                    src="{{asset('/')}}website/assets/images/products/product-filt2.jpg" alt="product-thumb">
                            </div>
                        </div>
                        <div class="thumb-wrapper three filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                 style="background-image: url({{asset('/')}}website/assets/images/products/product-filt3.jpg)"><img
                                    src="{{asset('/')}}website/assets/images/products/product-filt3.jpg" alt="product-thumb">
                            </div>
                        </div>
                        <div class="product-thumb-filter-group">
                            <div class="thumb-filter filter-btn active" data-show=".one"><img
                                    src="{{asset('/')}}website/assets/images/products/product-filt1.jpg" alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".two"><img
                                    src="{{asset('/')}}website/assets/images/products/product-filt2.jpg" alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".three"><img
                                    src="{{asset('/')}}website/assets/images/products/product-filt3.jpg" alt="product-thumb-filter"></div>
                        </div>
                    </div>
                    <div class="contents">
                        <div class="product-status">
                            <span class="product-catagory">Dress</span>
                            <div class="rating-stars-group">
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star-half-alt"></i></div>
                                <span>10 Reviews</span>
                            </div>
                        </div>
                        <h2 class="product-title">Wide Cotton Tunic Dress <span class="stock">In Stock</span></h2>
                        <span class="product-price"><span class="old-price">$9.35</span> $7.25</span>
                        <p>
                            Priyoshop has brought to you the Hijab 3 Pieces Combo Pack PS23. It is a
                            completely modern design and you feel comfortable to put on this hijab.
                            Buy it at the best price.
                        </p>
                        <div class="product-bottom-action">
                            <div class="cart-edit">
                                <div class="quantity-edit action-item">
                                    <button class="button"><i class="fal fa-minus minus"></i></button>
                                    <input type="text" class="input" value="01" />
                                    <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                </div>
                            </div>
                            <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                <div class="btn-text">
                                    Add To Cart
                                </div>
                                <div class="arrow-icon">
                                    <i class="fa-regular fa-cart-shopping"></i>
                                </div>
                                <div class="arrow-icon">
                                    <i class="fa-regular fa-cart-shopping"></i>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="rts-btn btn-primary ml--20"><i class="fa-light fa-heart"></i></a>
                        </div>
                        <div class="product-uniques">
                            <span class="sku product-unipue"><span>SKU: </span> BO1D0MX8SJ</span>
                            <span class="catagorys product-unipue"><span>Categories: </span> T-Shirts, Tops, Mens</span>
                            <span class="tags product-unipue"><span>Tags: </span> fashion, t-shirts, Men</span>
                        </div>
                        <div class="share-social">
                            <span>Share:</span>
                            <a class="platform" href="http://facebook.com/" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="platform" href="http://twitter.com/" target="_blank"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="platform" href="http://behance.com/" target="_blank"><i
                                    class="fab fa-behance"></i></a>
                            <a class="platform" href="http://youtube.com/" target="_blank"><i
                                    class="fab fa-youtube"></i></a>
                            <a class="platform" href="http://linkedin.com/" target="_blank"><i
                                    class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- successfully add in wishlist -->
    <div class="successfully-addedin-wishlist">
        <div class="d-flex" style="align-items: center; gap: 15px;">
            <i class="fa-regular fa-check"></i>
            <p>Your item has already added in wishlist successfully</p>
        </div>
    </div>
    <!-- successfully add in wishlist end -->



    <!-- Modal -->
    <div class="modal modal-compare-area-start fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Products Compare</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="compare-main-wrapper-body">
                        <div class="single-compare-elements name">Preview</div>
                        <div class="single-compare-elements">
                            <div class="thumbnail-preview">
                                <img src="{{asset('/')}}website/assets/images/grocery/01.jpg" alt="grocery">
                            </div>
                        </div>
                        <div class="single-compare-elements">
                            <div class="thumbnail-preview">
                                <img src="{{asset('/')}}website/assets/images/grocery/02.jpg" alt="grocery">
                            </div>
                        </div>
                        <div class="single-compare-elements">
                            <div class="thumbnail-preview">
                                <img src="{{asset('/')}}website/assets/images/grocery/03.jpg" alt="grocery">
                            </div>
                        </div>
                    </div>
                    <div class="compare-main-wrapper-body productname spacifiq">
                        <div class="single-compare-elements name">Name</div>
                        <div class="single-compare-elements">
                            <p>J.Crew Mercantile Women's Short</p>
                        </div>
                        <div class="single-compare-elements">
                            <p>Amazon Essentials Women's Tanks</p>
                        </div>
                        <div class="single-compare-elements">
                            <p>Amazon Brand - Daily Ritual Wom</p>
                        </div>
                    </div>
                    <div class="compare-main-wrapper-body productname">
                        <div class="single-compare-elements name">Price</div>
                        <div class="single-compare-elements price">
                            <p>$25.00</p>
                        </div>
                        <div class="single-compare-elements price">
                            <p>$39.25</p>
                        </div>
                        <div class="single-compare-elements price">
                            <p>$12.00</p>
                        </div>
                    </div>
                    <div class="compare-main-wrapper-body productname">
                        <div class="single-compare-elements name">Description</div>
                        <div class="single-compare-elements discription">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                        </div>
                        <div class="single-compare-elements discription">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                        </div>
                        <div class="single-compare-elements discription">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                        </div>
                    </div>
                    <div class="compare-main-wrapper-body productname">
                        <div class="single-compare-elements name">Rating</div>
                        <div class="single-compare-elements">
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>(25)</span>
                            </div>
                        </div>
                        <div class="single-compare-elements">
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>(19)</span>
                            </div>
                        </div>
                        <div class="single-compare-elements">
                            <div class="rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>(120)</span>
                            </div>
                        </div>
                    </div>
                    <div class="compare-main-wrapper-body productname">
                        <div class="single-compare-elements name">Weight</div>
                        <div class="single-compare-elements">
                            <div class="rating">
                                <p>320 gram</p>
                            </div>
                        </div>
                        <div class="single-compare-elements">
                            <p>370 gram</p>
                        </div>
                        <div class="single-compare-elements">
                            <p>380 gram</p>
                        </div>
                    </div>
                    <div class="compare-main-wrapper-body productname">
                        <div class="single-compare-elements name">Stock status</div>
                        <div class="single-compare-elements">
                            <div class="instocks">
                                <span>In Stock</span>
                            </div>
                        </div>
                        <div class="single-compare-elements">
                            <div class="outstocks">
                                <span class="out-stock">Out Of Stock</span>
                            </div>
                        </div>
                        <div class="single-compare-elements">
                            <div class="instocks">
                                <span>In Stock</span>
                            </div>
                        </div>
                    </div>
                    <div class="compare-main-wrapper-body productname">
                        <div class="single-compare-elements name">Buy Now</div>
                        <div class="single-compare-elements">
                            <div class="cart-counter-action">
                                <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                    <div class="btn-text">
                                        Add To Cart
                                    </div>
                                    <div class="arrow-icon">
                                        <i class="fa-regular fa-cart-shopping"></i>
                                    </div>
                                    <div class="arrow-icon">
                                        <i class="fa-regular fa-cart-shopping"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="single-compare-elements">
                            <div class="cart-counter-action">
                                <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                    <div class="btn-text">
                                        Add To Cart
                                    </div>
                                    <div class="arrow-icon">
                                        <i class="fa-regular fa-cart-shopping"></i>
                                    </div>
                                    <div class="arrow-icon">
                                        <i class="fa-regular fa-cart-shopping"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="single-compare-elements">
                            <div class="cart-counter-action">
                                <a href="#" class="rts-btn btn-primary radious-sm with-icon">
                                    <div class="btn-text">
                                        Add To Cart
                                    </div>
                                    <div class="arrow-icon">
                                        <i class="fa-regular fa-cart-shopping"></i>
                                    </div>
                                    <div class="arrow-icon">
                                        <i class="fa-regular fa-cart-shopping"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--================= Preloader Section Start Here =================-->
    <!-- <div id="weiboo-load">
    <div class="preloader-new">
        <svg class="cart_preloader" role="img" aria-label="Shopping cart_preloader line animation"
            viewBox="0 0 128 128" width="128px" height="128px" xmlns="http://www.w3.org/2000/svg">
            <g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="8">
                <g class="cart__track" stroke="hsla(0,10%,10%,0.1)">
                    <polyline points="4,4 21,4 26,22 124,22 112,64 35,64 39,80 106,80" />
                    <circle cx="43" cy="111" r="13" />
                    <circle cx="102" cy="111" r="13" />
                </g>
                <g class="cart__lines" stroke="currentColor">
                    <polyline class="cart__top" points="4,4 21,4 26,22 124,22 112,64 35,64 39,80 106,80"
                        stroke-dasharray="338 338" stroke-dashoffset="-338" />
                    <g class="cart__wheel1" transform="rotate(-90,43,111)">
                        <circle class="cart__wheel-stroke" cx="43" cy="111" r="13" stroke-dasharray="81.68 81.68"
                            stroke-dashoffset="81.68" />
                    </g>
                    <g class="cart__wheel2" transform="rotate(90,102,111)">
                        <circle class="cart__wheel-stroke" cx="102" cy="111" r="13" stroke-dasharray="81.68 81.68"
                            stroke-dashoffset="81.68" />
                    </g>
                </g>
            </g>
        </svg>
    </div>
</div> -->
    <!--================= Preloader End Here =================-->





    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>
    <div id="anywhere-home" class="anywere"></div>
    <!-- progress area start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    <!-- progress area end -->


@endsection

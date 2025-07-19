@extends('website.frontend.master')
@section('product_category')



    <div class="rts-navigation-area-breadcrumb bg_light-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="navigator-breadcrumb-wrapper">
                        <a href="{{route('/')}}">Home</a>
                        <i class="fa-regular fa-chevron-right"></i>
                        <a class="#" href="{{route('category.product',$subcategory->category->slug)}}">{{$subcategory->category->name}}</a>
                        <i class="fa-regular fa-chevron-right"></i>
                        <span>{{$subcategory->name}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-seperator bg_light-1">
        <div class="container">
            <hr class="section-seperator">
        </div>
    </div>

    <!-- shop[ grid sidebar wrapper -->
    <div class="shop-grid-sidebar-area rts-section-gap">
        <div class="container">
            <div class="row g-0">
                <div class="col-xl-12 col-lg-12">

                    <div class="tab-content" id="myTabContent">
                        <div class="product-area-wrapper-shopgrid-list mt--20 tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <div class="row g-4">
                                @foreach($subcategory->products as $product)
                                <div class="col-lg-20 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="single-shopping-card-one">
                                        <!-- iamge and sction area start -->
                                        <div class="image-and-action-area-wrapper">
                                            <a href="shop-details.html" class="thumbnail-preview">
                                                <div class="badge">
                                                    <span>25% <br>
                                                        Off
                                                    </span>
                                                    <i class="fa-solid fa-bookmark"></i>
                                                </div>
                                                <img src="{{asset('/backend/upload/images/product/'.$product->image)}}" alt="grocery">
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
                                        <!-- iamge and sction area start -->

                                        <div class="body-content">

                                            <a href="shop-details.html">
                                                <h4 class="title">{{$product->name}}</h4>
                                            </a>
                                            <span class="availability">500g Pack</span>
                                            <div class="price-area">
                                                <span class="current">${{$product->selling_price}}</span>
                                                <div class="previous">${{$product->product_price}}</div>
                                            </div>
                                            <div class="cart-counter-action">
                                                <div class="quantity-edit">
                                                    <input type="text" class="input" value="1">
                                                    <div class="button-wrapper-action">
                                                        <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                        <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                        </div>
                        <div class="product-area-wrapper-shopgrid-list with-list mt--20 tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-shopping-card-one discount-offer">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="{{asset('/website/assets')}}/images/grocery/03.jpg" alt="grocery">
                                        </a>
                                        <div class="body-content">
                                            <div class="title-area-left">
                                                <a href="shop-details.html">
                                                    <h4 class="title">Kajib Cerelac Mixed Fruits &amp;
                                                        Wheat with Milk</h4>
                                                </a>
                                                <span class="availability">500g Pack</span>
                                                <div class="price-area">
                                                    <span class="current">$36.00</span>
                                                    <div class="previous">$36.00</div>
                                                </div>
                                                <div class="cart-counter-action">
                                                    <div class="quantity-edit">
                                                        <input type="text" class="input" value="1">
                                                        <div class="button-wrapper-action">
                                                            <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                            <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
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
                                                </div>
                                            </div>
                                            <div class="natural-value">
                                                <h6 class="title">
                                                    Nutritional Values
                                                </h6>
                                                <div class="single">
                                                    <span>Energy(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Protein(g):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>magnetiam(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Calory(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Vitamine(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-shopping-card-one discount-offer">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="{{asset('/website/assets')}}/images/grocery/04.jpg" alt="grocery">
                                        </a>
                                        <div class="body-content">
                                            <div class="title-area-left">
                                                <a href="shop-details.html">
                                                    <h4 class="title">Lorg Cerelac Mixed Fruits &amp;
                                                        Wheat with Milk</h4>
                                                </a>
                                                <span class="availability">500g Pack</span>
                                                <div class="price-area">
                                                    <span class="current">$36.00</span>
                                                    <div class="previous">$36.00</div>
                                                </div>
                                                <div class="cart-counter-action">
                                                    <div class="quantity-edit">
                                                        <input type="text" class="input" value="1">
                                                        <div class="button-wrapper-action">
                                                            <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                            <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
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
                                                </div>
                                            </div>
                                            <div class="natural-value">
                                                <h6 class="title">
                                                    Nutritional Values
                                                </h6>
                                                <div class="single">
                                                    <span>Energy(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Protein(g):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>magnetiam(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Calory(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Vitamine(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-shopping-card-one discount-offer">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="{{asset('/website/assets')}}/images/grocery/05.jpg" alt="grocery">
                                        </a>
                                        <div class="body-content">
                                            <div class="title-area-left">
                                                <a href="shop-details.html">
                                                    <h4 class="title">Patas Cerelac Mixed Fruits &amp;
                                                        Wheat with Milk</h4>
                                                </a>
                                                <span class="availability">500g Pack</span>
                                                <div class="price-area">
                                                    <span class="current">$36.00</span>
                                                    <div class="previous">$36.00</div>
                                                </div>
                                                <div class="cart-counter-action">
                                                    <div class="quantity-edit">
                                                        <input type="text" class="input" value="1">
                                                        <div class="button-wrapper-action">
                                                            <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                            <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
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
                                                </div>
                                            </div>
                                            <div class="natural-value">
                                                <h6 class="title">
                                                    Nutritional Values
                                                </h6>
                                                <div class="single">
                                                    <span>Energy(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Protein(g):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>magnetiam(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Calory(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Vitamine(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-shopping-card-one discount-offer">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="{{asset('/website/assets')}}/images/grocery/06.jpg" alt="grocery">
                                        </a>
                                        <div class="body-content">
                                            <div class="title-area-left">
                                                <a href="shop-details.html">
                                                    <h4 class="title">Kolas Cerelac Mixed Fruits &amp;
                                                        Wheat with Milk</h4>
                                                </a>
                                                <span class="availability">500g Pack</span>
                                                <div class="price-area">
                                                    <span class="current">$36.00</span>
                                                    <div class="previous">$36.00</div>
                                                </div>
                                                <div class="cart-counter-action">
                                                    <div class="quantity-edit">
                                                        <input type="text" class="input" value="1">
                                                        <div class="button-wrapper-action">
                                                            <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                            <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
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
                                                </div>
                                            </div>
                                            <div class="natural-value">
                                                <h6 class="title">
                                                    Nutritional Values
                                                </h6>
                                                <div class="single">
                                                    <span>Energy(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Protein(g):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>magnetiam(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Calory(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Vitamine(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-shopping-card-one discount-offer">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="{{asset('/website/assets')}}/images/grocery/01.jpg" alt="grocery">
                                        </a>
                                        <div class="body-content">
                                            <div class="title-area-left">
                                                <a href="shop-details.html">
                                                    <h4 class="title">Rolar Cerelac Mixed Fruits &amp;
                                                        Wheat with Milk</h4>
                                                </a>
                                                <span class="availability">500g Pack</span>
                                                <div class="price-area">
                                                    <span class="current">$36.00</span>
                                                    <div class="previous">$36.00</div>
                                                </div>
                                                <div class="cart-counter-action">
                                                    <div class="quantity-edit">
                                                        <input type="text" class="input" value="1">
                                                        <div class="button-wrapper-action">
                                                            <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                            <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
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
                                                </div>
                                            </div>
                                            <div class="natural-value">
                                                <h6 class="title">
                                                    Nutritional Values
                                                </h6>
                                                <div class="single">
                                                    <span>Energy(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Protein(g):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>magnetiam(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Calory(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Vitamine(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single-shopping-card-one discount-offer">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="{{asset('/website/assets')}}/images/grocery/03.jpg" alt="grocery">
                                        </a>
                                        <div class="body-content">
                                            <div class="title-area-left">
                                                <a href="shop-details.html">
                                                    <h4 class="title">Olar Cerelac Mixed Fruits &amp;
                                                        Wheat with Milk</h4>
                                                </a>
                                                <span class="availability">500g Pack</span>
                                                <div class="price-area">
                                                    <span class="current">$36.00</span>
                                                    <div class="previous">$36.00</div>
                                                </div>
                                                <div class="cart-counter-action">
                                                    <div class="quantity-edit">
                                                        <input type="text" class="input" value="1">
                                                        <div class="button-wrapper-action">
                                                            <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                            <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
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
                                                </div>
                                            </div>
                                            <div class="natural-value">
                                                <h6 class="title">
                                                    Nutritional Values
                                                </h6>
                                                <div class="single">
                                                    <span>Energy(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Protein(g):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>magnetiam(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Calory(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Vitamine(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-shopping-card-one discount-offer">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="{{asset('/website/assets')}}/images/grocery/04.jpg" alt="grocery">
                                        </a>
                                        <div class="body-content">
                                            <div class="title-area-left">
                                                <a href="shop-details.html">
                                                    <h4 class="title">jack Fruit Mixed Fruits &amp;
                                                        Wheat with Milk</h4>
                                                </a>
                                                <span class="availability">500g Pack</span>
                                                <div class="price-area">
                                                    <span class="current">$36.00</span>
                                                    <div class="previous">$36.00</div>
                                                </div>
                                                <div class="cart-counter-action">
                                                    <div class="quantity-edit">
                                                        <input type="text" class="input" value="1">
                                                        <div class="button-wrapper-action">
                                                            <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                            <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
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
                                                </div>
                                            </div>
                                            <div class="natural-value">
                                                <h6 class="title">
                                                    Nutritional Values
                                                </h6>
                                                <div class="single">
                                                    <span>Energy(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Protein(g):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>magnetiam(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Calory(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Vitamine(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-shopping-card-one discount-offer">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="{{asset('/website/assets')}}/images/grocery/05.jpg" alt="grocery">
                                        </a>
                                        <div class="body-content">
                                            <div class="title-area-left">
                                                <a href="shop-details.html">
                                                    <h4 class="title">Fresh Cerelac Mixed Fruits &amp;
                                                        Wheat with Milk</h4>
                                                </a>
                                                <span class="availability">500g Pack</span>
                                                <div class="price-area">
                                                    <span class="current">$36.00</span>
                                                    <div class="previous">$36.00</div>
                                                </div>
                                                <div class="cart-counter-action">
                                                    <div class="quantity-edit">
                                                        <input type="text" class="input" value="1">
                                                        <div class="button-wrapper-action">
                                                            <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                            <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
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
                                                </div>
                                            </div>
                                            <div class="natural-value">
                                                <h6 class="title">
                                                    Nutritional Values
                                                </h6>
                                                <div class="single">
                                                    <span>Energy(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Protein(g):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>magnetiam(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Calory(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Vitamine(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-shopping-card-one discount-offer">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="{{asset('/website/assets')}}/images/grocery/06.jpg" alt="grocery">
                                        </a>
                                        <div class="body-content">
                                            <div class="title-area-left">
                                                <a href="shop-details.html">
                                                    <h4 class="title">Natural Cerelac Mixed Fruits &amp;
                                                        Wheat with Milk</h4>
                                                </a>
                                                <span class="availability">500g Pack</span>
                                                <div class="price-area">
                                                    <span class="current">$36.00</span>
                                                    <div class="previous">$36.00</div>
                                                </div>
                                                <div class="cart-counter-action">
                                                    <div class="quantity-edit">
                                                        <input type="text" class="input" value="1">
                                                        <div class="button-wrapper-action">
                                                            <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                            <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
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
                                                </div>
                                            </div>
                                            <div class="natural-value">
                                                <h6 class="title">
                                                    Nutritional Values
                                                </h6>
                                                <div class="single">
                                                    <span>Energy(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Protein(g):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>magnetiam(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Calory(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Vitamine(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-shopping-card-one discount-offer">
                                        <a href="shop-details.html" class="thumbnail-preview">
                                            <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                                <i class="fa-solid fa-bookmark"></i>
                                            </div>
                                            <img src="{{asset('/website/assets')}}/images/grocery/01.jpg" alt="grocery">
                                        </a>
                                        <div class="body-content">
                                            <div class="title-area-left">
                                                <a href="shop-details.html">
                                                    <h4 class="title">Nestle Cerelac Mixed Fruits &amp;
                                                        Wheat with Milk</h4>
                                                </a>
                                                <span class="availability">500g Pack</span>
                                                <div class="price-area">
                                                    <span class="current">$36.00</span>
                                                    <div class="previous">$36.00</div>
                                                </div>
                                                <div class="cart-counter-action">
                                                    <div class="quantity-edit">
                                                        <input type="text" class="input" value="1">
                                                        <div class="button-wrapper-action">
                                                            <button class="button"><i class="fa-regular fa-chevron-down"></i></button>
                                                            <button class="button plus">+<i class="fa-regular fa-chevron-up"></i></button>
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
                                                </div>
                                            </div>
                                            <div class="natural-value">
                                                <h6 class="title">
                                                    Nutritional Values
                                                </h6>
                                                <div class="single">
                                                    <span>Energy(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Protein(g):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>magnetiam(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Calory(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                                <div class="single">
                                                    <span>Vitamine(kcal):</span>
                                                    <span>211</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop[ grid sidebar wrapper end -->










@endsection

@extends('website.frontend.master')

@section('shop')


<!-- rts header area start -->
<!-- header style two -->
<div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>


    <form action="#" class="search-input-area-menu mt--30">
        <input type="text" placeholder="Search..." required>
        <button><i class="fa-light fa-magnifying-glass"></i></button>
    </form>

    <div class="mobile-menu-nav-area tab-nav-btn mt--20">

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Menu</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Category</button>
            </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <!-- mobile menu area start -->
                <div class="mobile-menu-main">
                    <nav class="nav-main mainmenu-nav mt--30">
                        <ul class="mainmenu metismenu" id="mobile-menu-active">
                            <li class="has-droupdown">
                                <a href="#" class="main">Home</a>
                                <ul class="submenu mm-collapse">
                                    <li><a class="mobile-menu-link" href="index.html">Home One</a></li>
                                    <li><a class="mobile-menu-link" href="index-two.html">Home Two</a></li>
                                    <li><a class="mobile-menu-link" href="index-three.html">Home Three</a></li>
                                    <li><a class="mobile-menu-link" href="index-four.html">Home Four</a></li>
                                    <li><a class="mobile-menu-link" href="index-five.html"> Home Five</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="about.html" class="main">About</a>
                            </li>
                            <li class="has-droupdown">
                                <a href="#" class="main">Pages</a>
                                <ul class="submenu mm-collapse">
                                    <li><a class="mobile-menu-link" href="about.html">About</a></li>
                                    <li><a class="mobile-menu-link" href="faq.html">Faq's</a></li>
                                    <li><a class="mobile-menu-link" href="invoice.html">Invoice</a></li>
                                    <li><a class="mobile-menu-link" href="contact.html">Contact</a></li>
                                    <li><a class="mobile-menu-link" href="register.html">Register</a></li>
                                    <li><a class="mobile-menu-link" href="login.html">Login</a></li>
                                    <li><a class="mobile-menu-link" href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a class="mobile-menu-link" href="cookies-policy.html">Cookies Policy</a></li>
                                    <li><a class="mobile-menu-link" href="terms-condition.html">Terms Condition</a></li>
                                    <li><a class="mobile-menu-link" href="404.html">Error Page</a></li>
                                </ul>
                            </li>
                            <li class="has-droupdown">
                                <a href="#" class="main">Shop</a>
                                <ul class="submenu mm-collapse">
                                    <li class="has-droupdown third-lvl">
                                        <a class="main" href="#">Shop Layout</a>
                                        <ul class="submenu-third-lvl mm-collapse">
                                            <li><a href="shop-grid-sidebar.html"></a>Shop Grid Sidebar</li>
                                            <li><a href="shop-list-sidebar.html"></a>Shop List Sidebar</li>
                                            <li><a href="shop-grid-top-filter.html"></a>Shop Grid Top Filter</li>
                                            <li><a href="shop-list-top-filter.html"></a>Shop List Top Filter</li>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown third-lvl">
                                        <a class="main" href="#">Shop Details</a>
                                        <ul class="submenu-third-lvl mm-collapse">
                                            <li><a href="shop-details.html"></a>Shop Details</li>
                                            <li><a href="shop-details-2.html"></a>Shop Details 2</li>
                                            <li><a href="shop-grid-top-filter.html"></a>Shop Grid Top Filter</li>
                                            <li><a href="shop-list-top-filter.html"></a>Shop List Top Filter</li>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown third-lvl">
                                        <a class="main" href="#">Product Feature</a>
                                        <ul class="submenu-third-lvl mm-collapse">
                                            <li><a href="shop-details-variable.html"></a>Shop Details Variable</li>
                                            <li><a href="shop-details-affiliats.html"></a>Shop Details Affiliats</li>
                                            <li><a href="shop-details-group.html"></a>Shop Details Group</li>
                                            <li><a href="shop-compare.html"></a>Shop Compare</li>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown third-lvl">
                                        <a class="main" href="#">Shop Others</a>
                                        <ul class="submenu-third-lvl mm-collapse">
                                            <li><a href="cart.html"></a>Cart</li>
                                            <li><a href="checkout.html"></a>Checkout</li>
                                            <li><a href="trackorder.html"></a>Trackorder</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-droupdown">
                                <a href="#" class="main">Blog</a>
                                <ul class="submenu mm-collapse">
                                    <li><a class="mobile-menu-link" href="blog.html">Blog</a></li>
                                    <li><a class="mobile-menu-link" href="blog-list-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a class="mobile-menu-link" href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html" class="main">Contact Us</a>
                            </li>
                        </ul>
                    </nav>

                </div>
                <!-- mobile menu area end -->
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <div class="category-btn category-hover-header menu-category">
                    <ul class="category-sub-menu" id="category-active-menu">
                        <li>
                            <a href="#" class="menu-item">
                                <img src="{{asset('/')}}website/assets/images/icons/01.svg" alt="icons">
                                <span>Breakfast &amp; Dairy</span>
                                <i class="fa-regular fa-plus"></i>
                            </a>
                            <ul class="submenu mm-collapse">
                                <li><a class="mobile-menu-link" href="#">Breakfast</a></li>
                                <li><a class="mobile-menu-link" href="#">Dinner</a></li>
                                <li><a class="mobile-menu-link" href="#"> Pumking</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-item">
                                <img src="{{asset('/')}}website/assets/images/icons/02.svg" alt="icons">
                                <span>Meats &amp; Seafood</span>
                                <i class="fa-regular fa-plus"></i>
                            </a>
                            <ul class="submenu mm-collapse">
                                <li><a class="mobile-menu-link" href="#">Breakfast</a></li>
                                <li><a class="mobile-menu-link" href="#">Dinner</a></li>
                                <li><a class="mobile-menu-link" href="#"> Pumking</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-item">
                                <img src="{{asset('/')}}website/assets/images/icons/03.svg" alt="icons">
                                <span>Breads &amp; Bakery</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-item">
                                <img src="{{asset('/')}}website/assets/images/icons/04.svg" alt="icons">
                                <span>Chips &amp; Snacks</span>
                                <i class="fa-regular fa-plus"></i>
                            </a>
                            <ul class="submenu mm-collapse">
                                <li><a class="mobile-menu-link" href="#">Breakfast</a></li>
                                <li><a class="mobile-menu-link" href="#">Dinner</a></li>
                                <li><a class="mobile-menu-link" href="#"> Pumking</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-item">
                                <img src="{{asset('/')}}website/assets/images/icons/05.svg" alt="icons">
                                <span>Medical Healthcare</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-item">
                                <img src="{{asset('/')}}website/assets/images/icons/06.svg" alt="icons">
                                <span>Breads &amp; Bakery</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-item">
                                <img src="{{asset('/')}}website/assets/images/icons/07.svg" alt="icons">
                                <span>Biscuits &amp; Snacks</span>
                                <i class="fa-regular fa-plus"></i>
                            </a>
                            <ul class="submenu mm-collapse">
                                <li><a class="mobile-menu-link" href="#">Breakfast</a></li>
                                <li><a class="mobile-menu-link" href="#">Dinner</a></li>
                                <li><a class="mobile-menu-link" href="#"> Pumking</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-item">
                                <img src="{{asset('/')}}website/assets/images/icons/08.svg" alt="icons">
                                <span>Frozen Foods</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-item">
                                <img src="{{asset('/')}}website/assets/images/icons/09.svg" alt="icons">
                                <span>Grocery &amp; Staples</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-item">
                                <img src="{{asset('/')}}website/assets/images/icons/10.svg" alt="icons">
                                <span>Other Items</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <!-- button area wrapper start -->
    <div class="button-area-main-wrapper-menuy-sidebar mt--50">
        <div class="contact-area">
            <div class="phone">
                <i class="fa-light fa-headset"></i>
                <a href="#">02345697871</a>
            </div>
            <div class="phone">
                <i class="fa-light fa-envelope"></i>
                <a href="#">02345697871</a>
            </div>
        </div>
        <div class="buton-area-bottom">
            <a href="login.html" class="rts-btn btn-primary">Sign In</a>
            <a href="register.html" class="rts-btn btn-primary">Sign Up</a>
        </div>
    </div>
    <!-- button area wrapper end -->

</div>
<!-- header style two End -->
<!-- rts header area end -->
<!-- rts header area end -->


<!-- rts navigation bar area start -->
<div class="rts-navigation-area-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="navigator-breadcrumb-wrapper">
                    <a href="index.html">Home</a>
                    <i class="fa-regular fa-chevron-right"></i>
                    <a class="current" href="index.html">Shop Grid Sidebar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts navigation bar area end -->
<div class="section-seperator">
    <div class="container">
        <hr class="section-seperator">
    </div>
</div>

<!-- shop[ grid sidebar wrapper -->
<div class="shop-grid-sidebar-area rts-section-gap">
    <div class="container">
        <div class="row g-0">
            <div class="col-xl-3 col-lg-12 pr--70 pr_lg--10 pr_sm--10 pr_md--5 rts-sticky-column-item">
                <div class="sidebar-filter-main theiaStickySidebar">
                    <div class="single-filter-box">
                        <h5 class="title">Widget Price Filter</h5>
                        <div class="filterbox-body">
                            <form action="#" class="price-input-area">
                                <div class="half-input-wrapper">
                                    <div class="single">
                                        <label for="min">Min price</label>
                                        <input id="min" type="text" value="0">
                                    </div>
                                    <div class="single">
                                        <label for="max">Max price</label>
                                        <input id="max" type="text" value="150">
                                    </div>
                                </div>
                                <input type="range" class="range">
                                <div class="filter-value-min-max">
                                    <span>Price: $10 — $90</span>
                                    <button class="rts-btn btn-primary">Filter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="single-filter-box">
                        <h5 class="title">Product Categories</h5>
                        <div class="filterbox-body">
                            <div class="category-wrapper ">
                                <!-- single category -->
                                <div class="single-category">
                                    <input id="cat1" type="checkbox">
                                    <label for="cat1">Beverages
                                    </label>
                                </div>
                                <!-- single category end -->
                                <!-- single category -->
                                <div class="single-category">
                                    <input id="cat2" type="checkbox">
                                    <label for="cat2">Biscuits & Snacks

                                    </label>
                                </div>
                                <!-- single category end -->
                                <!-- single category -->
                                <div class="single-category">
                                    <input id="cat3" type="checkbox">
                                    <label for="cat3">Breads & Bakery
                                    </label>
                                </div>
                                <!-- single category end -->
                                <!-- single category -->
                                <div class="single-category">
                                    <input id="cat4" type="checkbox">
                                    <label for="cat4">Breakfast & Dairy
                                    </label>
                                </div>
                                <!-- single category end -->
                                <!-- single category -->
                                <div class="single-category">
                                    <input id="cat7" type="checkbox">
                                    <label for="cat7">Grocery & Staples
                                    </label>
                                </div>
                                <!-- single category end -->
                                <!-- single category -->
                                <div class="single-category">
                                    <input id="cat6" type="checkbox">
                                    <label for="cat6">Fruits & Vegetables
                                    </label>
                                </div>
                                <!-- single category end -->
                                <!-- single category -->
                                <div class="single-category">
                                    <input id="cat8" type="checkbox">
                                    <label for="cat8">Household Needs
                                    </label>
                                </div>
                                <!-- single category end -->
                                <!-- single category -->
                                <div class="single-category">
                                    <input id="cat10" type="checkbox">
                                    <label for="cat10">Meats & Seafood
                                    </label>
                                </div>
                                <!-- single category end -->
                                <!-- single category -->
                                <div class="single-category">
                                    <input id="cat80" type="checkbox">
                                    <label for="cat80">Grocery & Staples
                                    </label>
                                </div>
                                <!-- single category end -->
                            </div>
                        </div>
                    </div>
                    <div class="single-filter-box">
                        <h5 class="title">Product Status</h5>
                        <div class="filterbox-body">
                            <div class="category-wrapper">
                                <!-- single category -->
                                <div class="single-category">
                                    <input id="cat11" type="checkbox">
                                    <label for="cat11">In Stock

                                    </label>
                                </div>
                                <!-- single category end -->
                                <!-- single category -->
                                <div class="single-category">
                                    <input id="cat12" type="checkbox">
                                    <label for="cat12">On Sale

                                    </label>
                                </div>
                                <!-- single category end -->
                            </div>
                        </div>
                    </div>
                    <div class="single-filter-box">
                        <h5 class="title">Select Brands</h5>
                        <div class="filterbox-body">
                            <div class="category-wrapper">
                                <!-- single category -->
                                <div class="single-category">
                                    <input id="cat13" type="checkbox">
                                    <label for="cat13">Frito Lay
                                    </label>
                                </div>
                                <!-- single category end -->
                                <!-- single category -->
                                <div class="single-category">
                                    <input id="cat14" type="checkbox">
                                    <label for="cat14">Nespresso
                                    </label>
                                </div>
                                <!-- single category end -->
                                <!-- single category -->
                                <div class="single-category">
                                    <input id="cat15" type="checkbox">
                                    <label for="cat15">Oreo
                                    </label>
                                </div>
                                <!-- single category end -->
                                <!-- single category -->
                                <div class="single-category">
                                    <input id="cat16" type="checkbox">
                                    <label for="cat16">Quaker
                                    </label>
                                </div>
                                <!-- single category end -->
                                <!-- single category -->
                                <div class="single-category">
                                    <input id="cat17" type="checkbox">
                                    <label for="cat17">Welch's
                                    </label>
                                </div>
                                <!-- single category end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-12">
                <div class="filter-select-area">
                    <div class="top-filter">
                        <span>Showing 1–20 of 57 results</span>
                        <div class="right-end">
                            <span>Sort: Short By Latest</span>
                            <div class="button-tab-area">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link single-button active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.5" y="0.5" width="6" height="6" rx="1.5" stroke="#2C3B28" />
                                                <rect x="0.5" y="9.5" width="6" height="6" rx="1.5" stroke="#2C3B28" />
                                                <rect x="9.5" y="0.5" width="6" height="6" rx="1.5" stroke="#2C3B28" />
                                                <rect x="9.5" y="9.5" width="6" height="6" rx="1.5" stroke="#2C3B28" />
                                            </svg>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link single-button" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.5" y="0.5" width="6" height="6" rx="1.5" stroke="#2C3C28" />
                                                <rect x="0.5" y="9.5" width="6" height="6" rx="1.5" stroke="#2C3C28" />
                                                <rect x="9" y="3" width="7" height="1" fill="#2C3C28" />
                                                <rect x="9" y="12" width="7" height="1" fill="#2C3C28" />
                                            </svg>
                                        </button>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="nice-select-area-wrapper-and-button">
                        <div class="nice-select-wrapper-1">
                            <div class="single-select">
                                <select>
                                    <option data-display="All Categories">All Categories</option>
                                    <option value="1">Some option</option>
                                    <option value="2">Another option</option>
                                    <option value="3" disabled>A disabled option</option>
                                    <option value="4">Potato</option>
                                </select>
                            </div>
                            <div class="single-select">
                                <select>
                                    <option data-display="All Brands">All Brands</option>
                                    <option value="1">Some option</option>
                                    <option value="2">Another option</option>
                                    <option value="3" disabled>A disabled option</option>
                                    <option value="4">Potato</option>
                                </select>
                            </div>
                            <div class="single-select">
                                <select>
                                    <option data-display="All Size">All Size </option>
                                    <option value="1">Some option</option>
                                    <option value="2">Another option</option>
                                    <option value="3" disabled>A disabled option</option>
                                    <option value="4">Potato</option>
                                </select>
                            </div>
                            <div class="single-select">
                                <select>
                                    <option data-display="All Weight">All Weight</option>
                                    <option value="1">Some option</option>
                                    <option value="2">Another option</option>
                                    <option value="3" disabled>A disabled option</option>
                                    <option value="4">Potato</option>
                                </select>
                            </div>
                        </div>
                        <div class="button-area">
                            <button class="rts-btn">Filter</button>
                            <button class="rts-btn">Reset Filter</button>
                        </div>
                    </div>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="product-area-wrapper-shopgrid-list mt--20 tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="row g-4">
                            <div class="col-lg-20 col-lg-4 col-md-6 col-sm-6 col-12">
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
                                            <img src="{{asset('/')}}website/assets/images/grocery/01.jpg" alt="grocery">
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
                                            <h4 class="title">Best Cerelac Mixed Fruits &amp;
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
                                </div>
                            </div>
                            <div class="col-lg-20 col-lg-4 col-md-6 col-sm-6 col-12">
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
                                            <img src="{{asset('/')}}website/assets/images/grocery/02.jpg" alt="grocery">
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
                                            <h4 class="title">None Cerelac Mixed Fruits &amp;
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
                                </div>
                            </div>
                            <div class="col-lg-20 col-lg-4 col-md-6 col-sm-6 col-12">
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
                                            <img src="{{asset('/')}}website/assets/images/grocery/03.jpg" alt="grocery">
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
                                            <h4 class="title">More Cerelac Mixed Fruits &amp;
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
                                </div>
                            </div>
                            <div class="col-lg-20 col-lg-4 col-md-6 col-sm-6 col-12">
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
                                            <img src="{{asset('/')}}website/assets/images/grocery/04.jpg" alt="grocery">
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
                                            <h4 class="title">Tech Cerelac Mixed Fruits &amp;
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
                                </div>
                            </div>
                            <div class="col-lg-20 col-lg-4 col-md-6 col-sm-6 col-12">
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
                                            <img src="{{asset('/')}}website/assets/images/grocery/05.jpg" alt="grocery">
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
                                            <h4 class="title">Food Cerelac Mixed Fruits &amp;
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
                                </div>
                            </div>
                            <div class="col-lg-20 col-lg-4 col-md-6 col-sm-6 col-12">
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
                                            <img src="{{asset('/')}}website/assets/images/grocery/06.jpg" alt="grocery">
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
                                            <h4 class="title">Vagetable Cerelac Mixed Fruits &amp;
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
                                </div>
                            </div>
                            <div class="col-lg-20 col-lg-4 col-md-6 col-sm-6 col-12">
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
                                            <img src="{{asset('/')}}website/assets/images/grocery/03.jpg" alt="grocery">
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
                                            <h4 class="title">Juice Cerelac Mixed Fruits &amp;
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
                                </div>
                            </div>
                            <div class="col-lg-20 col-lg-4 col-md-6 col-sm-6 col-12">
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
                                            <img src="{{asset('/')}}website/assets/images/grocery/05.jpg" alt="grocery">
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
                                            <h4 class="title">Coco Cerelac Mixed Fruits &amp;
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
                                </div>
                            </div>
                            <div class="col-lg-20 col-lg-4 col-md-6 col-sm-6 col-12">
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
                                            <img src="{{asset('/')}}website/assets/images/grocery/02.jpg" alt="grocery">
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
                                            <h4 class="title">Morp Cerelac Mixed Fruits &amp;
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
                                </div>
                            </div>
                            <div class="col-lg-20 col-lg-4 col-md-6 col-sm-6 col-12">
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
                                            <img src="{{asset('/')}}website/assets/images/grocery/06.jpg" alt="grocery">
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
                                            <h4 class="title">Visan Cerelac Mixed Fruits &amp;
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
                                </div>
                            </div>
                            <div class="col-lg-20 col-lg-4 col-md-6 col-sm-6 col-12">
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
                                            <img src="{{asset('/')}}website/assets/images/grocery/01.jpg" alt="grocery">
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
                                            <h4 class="title">Porsta Cerelac Mixed Fruits &amp;
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
                                </div>
                            </div>
                            <div class="col-lg-20 col-lg-4 col-md-6 col-sm-6 col-12">
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
                                            <img src="{{asset('/')}}website/assets/images/grocery/02.jpg" alt="grocery">
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
                                            <h4 class="title">Chicken Cerelac Mixed Fruits &amp;
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
                                </div>
                            </div>
                            <div class="col-lg-20 col-lg-4 col-md-6 col-sm-6 col-12">
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
                                            <img src="{{asset('/')}}website/assets/images/grocery/03.jpg" alt="grocery">
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
                                            <h4 class="title">Manus Cerelac Mixed Fruits &amp;
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
                                </div>
                            </div>
                            <div class="col-lg-20 col-lg-4 col-md-6 col-sm-6 col-12">
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
                                            <img src="{{asset('/')}}website/assets/images/grocery/04.jpg" alt="grocery">
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
                                            <h4 class="title">Sajid Cerelac Mixed Fruits &amp;
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
                                </div>
                            </div>
                            <div class="col-lg-20 col-lg-4 col-md-6 col-sm-6 col-12">
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
                                            <img src="{{asset('/')}}website/assets/images/grocery/05.jpg" alt="grocery">
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
                                            <h4 class="title">Kolid Cerelac Mixed Fruits &amp;
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
                                </div>
                            </div>
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
                                        <img src="{{asset('/')}}website/assets/images/grocery/03.jpg" alt="grocery">
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
                                <div class="single-shopping-card-one discount-offer">
                                    <a href="shop-details.html" class="thumbnail-preview">
                                        <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                            <i class="fa-solid fa-bookmark"></i>
                                        </div>
                                        <img src="{{asset('/')}}website/assets/images/grocery/04.jpg" alt="grocery">
                                    </a>
                                    <div class="body-content">
                                        <div class="title-area-left">
                                            <a href="shop-details.html">
                                                <h4 class="title">Varts Cerelac Mixed Fruits &amp;
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
                                        <img src="{{asset('/')}}website/assets/images/grocery/05.jpg" alt="grocery">
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
                                <div class="single-shopping-card-one discount-offer">
                                    <a href="shop-details.html" class="thumbnail-preview">
                                        <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                            <i class="fa-solid fa-bookmark"></i>
                                        </div>
                                        <img src="{{asset('/')}}website/assets/images/grocery/06.jpg" alt="grocery">
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
                                <div class="single-shopping-card-one discount-offer">
                                    <a href="shop-details.html" class="thumbnail-preview">
                                        <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                            <i class="fa-solid fa-bookmark"></i>
                                        </div>
                                        <img src="{{asset('/')}}website/assets/images/grocery/01.jpg" alt="grocery">
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
                            <div class="col-lg-6">
                                <div class="single-shopping-card-one discount-offer">
                                    <a href="shop-details.html" class="thumbnail-preview">
                                        <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                            <i class="fa-solid fa-bookmark"></i>
                                        </div>
                                        <img src="{{asset('/')}}website/assets/images/grocery/03.jpg" alt="grocery">
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
                                <div class="single-shopping-card-one discount-offer">
                                    <a href="shop-details.html" class="thumbnail-preview">
                                        <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                            <i class="fa-solid fa-bookmark"></i>
                                        </div>
                                        <img src="{{asset('/')}}website/assets/images/grocery/04.jpg" alt="grocery">
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
                                <div class="single-shopping-card-one discount-offer">
                                    <a href="shop-details.html" class="thumbnail-preview">
                                        <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                            <i class="fa-solid fa-bookmark"></i>
                                        </div>
                                        <img src="{{asset('/')}}website/assets/images/grocery/05.jpg" alt="grocery">
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
                                <div class="single-shopping-card-one discount-offer">
                                    <a href="shop-details.html" class="thumbnail-preview">
                                        <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                            <i class="fa-solid fa-bookmark"></i>
                                        </div>
                                        <img src="{{asset('/')}}website/assets/images/grocery/06.jpg" alt="grocery">
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
                                <div class="single-shopping-card-one discount-offer">
                                    <a href="shop-details.html" class="thumbnail-preview">
                                        <div class="badge">
                                                <span>25% <br>
                                                    Off
                                                </span>
                                            <i class="fa-solid fa-bookmark"></i>
                                        </div>
                                        <img src="{{asset('/')}}website/assets/images/grocery/01.jpg" alt="grocery">
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







<div class="product-details-popup-wrapper">
    <div class="rts-product-details-section rts-product-details-section2 product-details-popup-section">
        <div class="product-details-popup">
            <button class="product-details-close-btn"><i class="fal fa-times"></i></button>
            <div class="details-product-area">
                <div class="product-thumb-area">
                    <div class="cursor"></div>
                    <div class="thumb-wrapper one filterd-items figure">
                        <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url({{asset('/')}}website/assets/images/products/product-details.jpg)"><img src="{{asset('/')}}website/assets/images/products/product-details.jpg" alt="product-thumb">
                        </div>
                    </div>
                    <div class="thumb-wrapper two filterd-items hide">
                        <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url({{asset('/')}}website/assets/images/products/product-filt2.jpg)"><img src="{{asset('/')}}website/assets/images/products/product-filt2.jpg" alt="product-thumb">
                        </div>
                    </div>
                    <div class="thumb-wrapper three filterd-items hide">
                        <div class="product-thumb zoom" onmousemove="zoom(event)" style="background-image: url({{asset('/')}}website/assets/images/products/product-filt3.jpg)"><img src="{{asset('/')}}website/assets/images/products/product-filt3.jpg" alt="product-thumb">
                        </div>
                    </div>
                    <div class="product-thumb-filter-group">
                        <div class="thumb-filter filter-btn active" data-show=".one"><img src="{{asset('/')}}website/assets/images/products/product-filt1.jpg" alt="product-thumb-filter"></div>
                        <div class="thumb-filter filter-btn" data-show=".two"><img src="{{asset('/')}}website/assets/images/products/product-filt2.jpg" alt="product-thumb-filter"></div>
                        <div class="thumb-filter filter-btn" data-show=".three"><img src="{{asset('/')}}website/assets/images/products/product-filt3.jpg" alt="product-thumb-filter"></div>
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ekomart-Grocery-Store(e-Commerce) HTML Template: A sleek, responsive, and user-friendly HTML template designed for online grocery stores.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Grocery, Store, stores">
    <title>Ekomart-Grocery-Store(e-Commerce) HTML Template</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}website/assets/images/fav.png">
    <!-- plugins css -->
    @include('website.frontend.includes.style')
</head>




<body class="index-five">
    @include('website.frontend.includes.header')

    @yield('content')
    @yield('shop')
    @yield('account')
    @yield('contact')
    @yield('about')
    @yield('product_category')




    @include('website.frontend.includes.script')


</body>

</html>

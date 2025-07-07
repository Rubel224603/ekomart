<!doctype html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Noa - Laravel Bootstrap 5 Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="laravel admin template, bootstrap admin template, admin dashboard template, admin dashboard, admin template, admin, bootstrap 5, laravel admin, laravel admin dashboard template, laravel ui template, laravel admin panel, admin panel, laravel admin dashboard, laravel template, admin ui dashboard">

    <!-- TITLE -->
    <title>Noa - Laravel Bootstrap 5 Admin & Dashboard Template</title>

    <!-- FAVICON -->
    @include('website.backend.includes.style')

</head>
<body class="ltr app sidebar-mini">

    <!-- GLOBAL-LOADER -->

    <!-- /GLOBAL-LOADER -->
    <!-- PAGE -->
    <div class="page">


        <div class="page-main">

            <!-- app-Header -->
            @include('website.backend.includes.navbar')
            <!-- /app-Header -->

                <!--APP-SIDEBAR-->
            @include('website.backend.includes.sidebar')
            <!--/APP-SIDEBAR-->

                <!--app-content open-->
            <div class="app-content main-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">




                       @yield('content')


                    </div>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>

    </div>
    <!-- page -->

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

    @include('website.backend.includes.script')

    <script>
        // Import flasher in your JS file
        import flasher from '@flasher/flasher';

        document.getElementById('saveForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);

            fetch('/api/save', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
                .then(response => response.json())
                .then(data => {
                    console.log('Success:', data);
                    // Explicitly call flasher methods based on the response
                    if (data.status === 'success') {
                        flasher.success(data.message);
                    } else {
                        flasher.error(data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    flasher.error('An unexpected error occurred');
                });
        });
    </script>
</body>


</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Kopi Johar</title>

    <link rel="stylesheet" href={{ URL::asset('dist/assets/css/main/app.css') }}>
    <link rel="shortcut icon" href={{ URL::asset('dist/assets/images/logo/favicon.svg') }} type="image/x-icon">
    <link rel="shortcut icon" href={{ URL::asset('dist/assets/images/logo/favicon.png') }} type="image/png">

    <link rel="stylesheet" href={{ URL::asset('dist/assets/css/shared/iconly.css') }}">

</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <a href="{{ url('/') }}"><img src={{ URL::asset('dist/assets/images/logo/logo.svg') }}
                                    alt="Logo"></a>
                        </div>
                        <div class="header-top-right">

                            <div class="dropdown">

                                <!-- Burger button responsive -->
                                <a href="#" class="burger-btn d-block d-xl-none">
                                    <i class="bi bi-justify fs-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- NavBar -->
                @include('user.layouts.navbar')

            </header>

            <div class="content-wrapper container">

                @yield('content')

            </div>

            <!-- Footer -->
            @include('user.layouts.footer')

        </div>
    </div>
    <script src={{ URL::asset('dist/assets/js/bootstrap.js') }}></script>
    <script src={{ URL::asset('dist/assets/js/app.js') }}></script>
    <script src={{ URL::asset('dist/assets/js/pages/horizontal-layout.js') }}></script>

    <script src={{ URL::asset('dist/assets/extensions/apexcharts/apexcharts.min.js') }}></script>
    <script src={{ URL::asset('dist/assets/js/pages/dashboard.js') }}></script>

</body>

</html>

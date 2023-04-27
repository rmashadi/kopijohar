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

                <div class="page-content">
                    <div class="container">

                    </div>
                    <section class="row">
                        <div class="col-12 col-lg-12">
                            <div class="row">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2333468435836!2d110.40871087586515!3d-7.765060792254209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59dd9e1387d3%3A0x9d83be451e6413c5!2sKopi%20Johar%2C%20Kedai%20Kopi%20Yogyakarta!5e0!3m2!1sen!2sid!4v1681920089413!5m2!1sen!2sid"
                                    width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </section>
                </div>

            </div>


        </div>
    </div>
    <script src={{ URL::asset('dist/assets/js/bootstrap.js') }}></script>
    <script src={{ URL::asset('dist/assets/js/app.js') }}></script>
    <script src={{ URL::asset('dist/assets/js/pages/horizontal-layout.js') }}></script>

    <script src={{ URL::asset('dist/assets/extensions/apexcharts/apexcharts.min.js') }}></script>
    <script src={{ URL::asset('dist/assets/js/pages/dashboard.js') }}></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Menu Produk</title>

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
                        <div class="col-6 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <!--BorderLess Modal Modal -->
                                            <div class="modal fade text-left modal-borderless" id="border-less"
                                                tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Border-Less</h5>
                                                            <button type="button" class="close rounded-pill"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="product-image text-center">
                                                            <img width="375" height="350"
                                                                src={{ URL::asset('dist/assets/images/samples/banana.jpg') }}>
                                                            <br>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>
                                                                Bonbon caramels muffin.
                                                            </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light-primary"
                                                                data-bs-dismiss="modal">
                                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">Close</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="product">
                                            <div class="product-image">
                                                <img src={{ URL::asset('dist/assets/images/logo/logo.svg') }}>
                                                <br>
                                            </div>
                                            <div class="product-description">
                                                <h3 class="text-center">Americano</h3>
                                                <p>Harga: <b>Rp 100.000</b>.</p>
                                                <div class="product-buttons">
                                                    <!-- Button trigger for BorderLess Modal -->
                                                    <button type="button"
                                                        class="btn btn-outline-primary block mx-2 my-2"
                                                        data-bs-toggle="modal" data-bs-target="#border-less">
                                                        Gambar
                                                    </button>
                                                    <button class="btn btn-success block mx-2 my-2">Checkout</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

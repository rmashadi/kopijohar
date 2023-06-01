<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    
    <link rel="stylesheet" href={{URL::asset('dist/assets/css/main/app.css')}}>
    <link rel="shortcut icon" href={{URL::asset('dist/assets/images/logo/favicon.svg')}} type="image/x-icon">
    <link rel="shortcut icon" href={{URL::asset('dist/assets/images/logo/favicon.png')}} type="image/png">
    
<link rel="stylesheet" href={{URL::asset('dist/assets/css/shared/iconly.css')}}">

</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <a href="{{url('/')}}"><img src={{URL::asset('dist/assets/images/logo/logo.svg')}} alt="Logo"></a>
                        </div>
                        <div class="header-top-right">
                            <div class="dropdown">
                                <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md2" >
                                        <img src={{URL::asset('dist/assets/images/faces/1.jpg')}} alt="Avatar">
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name">John Ducky</h6>
                                        <p class="user-dropdown-status text-sm text-muted">User Customer</p>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                                  <li><a class="dropdown-item" href="#">My Account</a></li>
                                  <li><a class="dropdown-item" href="#">Checkout</a></li>
                                  <li><a class="dropdown-item" href="#">Settings</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <form action="{{ route('auth.logout.user') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                  </form>
                                </ul>
                            </div>

                            <!-- Burger button responsive 
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a> -->
                        </div>
                    </div>
                </div>

                <!--
                # Navbar Pages
                 yield(content)
                -->

            </header>

            <div class="content-wrapper container">
                
<div class="page-heading text-center">
    <h3>Halo Customer</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">

            <div class="container">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>My Point</h4>
                    </div>
                    <div class="card-body">
                        <div id="radialGradient"></div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-6 col-md-8">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon red mb-2">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Jumlah Poin</h6>
                                        <h6 class="font-extrabold mb-0">9</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6 col-md-8">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Total Belanja</h6>
                                        <h6 class="font-extrabold mb-0">Rp 180.000</h6>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-outline-primary block mx-2 my-2">
            History Pembelian
        </button>
    </section>
</div>

            </div>

            <footer>
                <div class="container">
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2023 &copy; Mazer</p>
                        </div>
                        <div class="float-end">
                            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="#">Kedai Johar</a></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src={{URL::asset('dist/assets/js/bootstrap.js')}}></script>
    <script src={{URL::asset('dist/assets/js/app.js')}}></script>
    <script src={{URL::asset('dist/assets/js/pages/horizontal-layout.js')}}></script>
    
<script src={{URL::asset('dist/assets/extensions/apexcharts/apexcharts.min.js')}}></script>
<script src={{URL::asset('dist/assets/js/pages/dashboard.js')}}></script>

</body>

</html>

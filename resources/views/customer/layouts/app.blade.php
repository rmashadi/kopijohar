<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Kopi Johar</title>
    
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

                                <!-- Burger button responsive -->
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- NavBar -->
                @include('customer.layouts.navbar')

            </header>

            <div class="content-wrapper container">
            
<div class="page-content">
    <div class="container">
        
    </div>
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title text-center">Menu Tentang Kopi dan Non Kopi</h4>
                            </div>
                            <img class="img-fluid w-100" src={{URL::asset('dist/assets/images/samples/banana.jpg')}} alt="Card image cap">
                        </div>
                        <div class="card-footer">
                            <p class="card-text">
                                Nikmati ragam kopi spesial dari <b>Kedai Kopi Johar</b> yang unik dan nikmat. 
                                Pilih dari berbagai biji kopi, bahan tambahan, dan bentuk sajian. 
                                Dengan suasana cozy dan ramah lingkungan, <b>Kedai Kopi Johar</b> adalah tempat yang sempurna untuk menikmati kopi dan bersantai bersama teman dan keluarga.
                            </p>
                            <!--
                            <span>Card Footer</span>
                            <button class="btn btn-light-primary">Read More</button> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title text-center">Menu Tentang Makanan</h4>
                            </div>
                            <img class="img-fluid w-100" src={{URL::asset('dist/assets/images/samples/banana.jpg')}} alt="Card image cap">
                        </div>
                        <div class="card-footer">
                            <p class="card-text">
                                <b>Kedai Kopi Johar</b>  hanya menyediakan menu makanan ringan seperti french fries, roti canai, dan camilan lainnya yang cocok untuk menemani secangkir kopi. 
                                Semua makanan kami dibuat dengan bahan-bahan berkualitas dan diproses dengan higienis, sehingga Anda bisa menikmati hidangan yang lezat dan sehat.
                            </p>
                            <!--
                            <span>Card Footer</span>
                            <button class="btn btn-light-primary">Read More</button> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title text-center">Menu Tentang Cigars</h4>
                            </div>
                            <img class="img-fluid w-100" src={{URL::asset('dist/assets/images/samples/banana.jpg')}} alt="Card image cap">
                        </div>
                        <div class="card-footer">
                            <p class="card-text">
                                <b>Kedai Kopi Johar</b> juga menyediakan menu Cigars (Cerutu) dengan berbagai macam merk dan jenis serta harga yang terjangkau,
                                Untuk menemani sepanjang harimu dengan ngopi di <b>Kedai Kopi Johar</b>.
                            </p>
                            <!--
                            <span>Card Footer</span>
                            <button class="btn btn-light-primary">Read More</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

            </div>
            
            <!-- Footer -->
            @include('customer.layouts.footer')
            
        </div>
    </div>
    <script src={{URL::asset('dist/assets/js/bootstrap.js')}}></script>
    <script src={{URL::asset('dist/assets/js/app.js')}}></script>
    <script src={{URL::asset('dist/assets/js/pages/horizontal-layout.js')}}></script>
    
<script src={{URL::asset('dist/assets/extensions/apexcharts/apexcharts.min.js')}}></script>
<script src={{URL::asset('dist/assets/js/pages/dashboard.js')}}></script>

</body>

</html>

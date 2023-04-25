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
    <section class="section">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4>Slides only</h4>
                <p>A carousel without slide control</p>
              </div>
              <div class="card-body">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src={{URL::asset('dist/assets/images/samples/building.jpg')}} class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src={{URL::asset('dist/assets/images/samples/architecture1.jpg')}} class="d-block w-100" alt="...">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="text-center">Contact Us</h4>
                <form action="#">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" placeholder="Username">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" placeholder="Email">
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                    </div>
                    <div class="form-group with-title mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1"></textarea>
                        <label>Your experience</label>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Send Message</button>
                </form>
              </div>
              <div class="card-body">
                
              </div>
            </div>
          </div>
        </div>
      </section>
</div>

            </div>
            
            
        </div>
    </div>
    <script src={{URL::asset('dist/assets/js/bootstrap.js')}}></script>
    <script src={{URL::asset('dist/assets/js/app.js')}}></script>
    <script src={{URL::asset('dist/assets/js/pages/horizontal-layout.js')}}></script>
    
<script src={{URL::asset('dist/assets/extensions/apexcharts/apexcharts.min.js')}}></script>
<script src={{URL::asset('dist/assets/js/pages/dashboard.js')}}></script>

</body>

</html>

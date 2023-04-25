<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot-Password Page Admin - Kopi Johar</title>
    <link rel="stylesheet" href="{{URL::asset('dist/assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dist/assets/css/pages/auth.css')}}">
    <link rel="shortcut icon" href="{{URL::asset('dist/assets/images/logo/favicon.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{URL::asset('dist/assets/images/logo/favicon.png')}}" type="image/png">
</head>

<body>
    <div id="auth">
        
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="#"><img src="{{URL::asset('dist/assets/images/logo/logo.svg')}}" alt="Logo"></a>
            </div>
            <h1 class="auth-title">Lupa Password</h1>
            <p class="auth-subtitle mb-5">Input your email and we will send you reset password link.</p>

            <form action="#">
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="email" class="form-control form-control-xl" placeholder="Email">
                    <div class="form-control-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Send</button>
            </form>
            <div class="text-center mt-5 text-lg fs-4">
                <p class='text-gray-600'>Remember your account? <a href="auth-login.html" class="font-bold">Login</a>.
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div>

    </div>
</body>

</html>

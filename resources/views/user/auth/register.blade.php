<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page - Kopi Johar</title>
    <link rel="stylesheet" href={{ URL::asset('dist/assets/css/main/app.css') }}>
    <link rel="stylesheet" href={{ URL::asset('dist/assets/css/pages/auth.css') }}>
    <link rel="shortcut icon" href={{ URL::asset('dist/assets/images/logo/favicon.svg') }} type="image/x-icon">
    <link rel="shortcut icon" href={{ URL::asset('dist/assets/images/logo/favicon.png') }} type="image/png">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="{{ url('/') }}"><img src={{ URL::asset('dist/assets/images/logo/logo.svg') }}
                                alt="Logo"></a>
                    </div>
                    <h1 class="auth-title text-center">Register</h1>

                    <form action="{{ route('register.user.create') }}" method="post">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="username" type="text" class="form-control form-control-xl"
                                placeholder="Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        @error('username')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="email" type="text" class="form-control form-control-xl"
                                placeholder="Email">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input name="password" type="password" class="form-control form-control-xl"
                                placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Daftar</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class='text-gray-600'>Sudah Punya Akun...? <a href="{{ url('/login') }}"
                                class="font-bold">Login
                            </a>.</p>
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

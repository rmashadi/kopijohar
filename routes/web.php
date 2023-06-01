<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminController as AdminAuth;
use App\Http\Controllers\Auth\UserController as UserAuth;
use App\Http\Controllers\LandingController;

/** Website Utama **/
Route::get('/', [LandingController::class, 'index']);

/** Route Halaman Tentang **/
Route::get('/maps', function () {
    return view('user.about.maps');
});

Route::get('/contact', function () {
    return view('user.about.contact');
});

/** Route Halaman Produk **/
Route::get('/coffee', function () {
    return view('user.produk.coffee');
});

Route::get('/foods', function () {
    return view('user.produk.food');
});

Route::get('/cigars', function () {
    return view('user.produk.cigar');
});

/** Route Halaman Auth User Customers **/
Route::get('/login', function () {
    return view('user.auth.login');
});

Route::get('/register', function () {
    return view('user.auth.register');
});

Route::get('/forgot-password', function () {
    return view('user.auth.forgot-password');
});

Route::get('/dashboard', function () {
    return view('user.userDashboard');
});


// Route Administrator 
Route::get('/adm/login', function () {
    return view('admin.auth.login');
});

Route::get('/adm/dashboard', function () {
    return view('admin.dashboard');
});

Route::name('auth.')->prefix('auth')->group(function () {
    Route::get('/admin', [AdminAuth::class, 'login'])->name('admin');
    Route::get('/dashboard', [UserAuth::class, 'login'])->name('dashboard');

    Route::name('login.')->prefix('login')->group(function () {
        Route::post('/admin', [AdminAuth::class, 'authenticate'])->name('admin');
        Route::post('/user', [UserAuth::class, 'authenticate'])->name('user');
    });

    Route::name('logout.')->prefix('logout')->group(function () {
        Route::post('/admin', [AdminAuth::class, 'logout'])->name('admin');
        Route::post('/user', [UserAuth::class, 'logout'])->name('user');
    });
});

Route::name('register.')->prefix('register')->group(function () {
    Route::get('/user', [UserAuth::class, 'register'])->name('user.page');
    Route::post('/user', [UserAuth::class, 'create'])->name('user.create');
});
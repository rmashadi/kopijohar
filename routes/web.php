<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/** Website Utama **/
Route::get('/', function () {
    return view('customer.layouts.app');
});

/** Route Halaman Tentang **/
Route::get('/maps', function () {
    return view('customer.about.maps');
});

Route::get('/contact', function () {
    return view('customer.about.contact');
});

/** Route Halaman Produk **/
Route::get('/coffee', function () {
    return view('customer.produk.coffee');
});

Route::get('/foods', function () {
    return view('customer.produk.food');
});

Route::get('/cigars', function () {
    return view('customer.produk.cigar');
});

/** Route Halaman Auth User Customers **/
Route::get('/login', function () {
    return view('customer.auth.login');
});

Route::get('/register', function () {
    return view('customer.auth.register');
});

Route::get('/forgot-password', function () {
    return view('customer.auth.forgot-password');
});

Route::get('/dashboard', function () {
    return view('customer.userDashboard');
});


// Route Administrator 
Route::get('/adm/login', function () {
    return view('admin.auth.login');
});

Route::get('/adm/dashboard', function () {
    return view('admin.dashboard');
});

/**
//Routing Auth Admin and Owner Page
Route::get('/adm/login', [AdminController::class, 'login'])->name('login');
Route::post('/authenticate', [AdminController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

//Dashboard Page
Route::middleware(['auth:web,admin'])->get('/adm/dashboard', function() {
    return view('admin.dashboard');
 });

Route::prefix('admin')->name('admin')->group(function () {
    Route::get('//login', [AdminController::class, 'login'])->name('login');
    Route::post('/authenticate', [AdminController::class, 'authenticate'])->name('authenticate');
    Route::middleware('auth:admin')->get('/logout', [AdminController::class, 'logout'])->name('logout');
});

 //Routing Auth Users Customer page
Route::prefix('users')->name('user')->group(function(){
    Route::get('/login', [CustomerController::class, 'login'])->name('login');
    Route::post('/authenticate', [CustomerController::class, 'authenticate'])->name('authenticate');
    Route::get('/register', [CustomerController::class, 'register'])->name('register');
    Route::get('/forgot-password', [CustomerController::class, 'forgot-password'])->name('forgot-password');
});
**/
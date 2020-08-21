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

Route::get('/', function () {
    return view('index');
});


Route::get('/category', function () {
return view('category');
});


Route::get('/cart', function () {
return view('cart');
});


Route::get('/single-product', function () {
return view('single-product');
});


Route::get('/checkout', function () {
return view('checkout');
});

Route::get('/contact', function () {
return view('contact');
});

Route::get('/elements', function () {
return view('elements');
});

Route::get('/tracking', function () {
return view('tracking');
});

Route::get('/single-blog', function () {
return view('single-blog');
});



Route::get('/test-route', function () {

    echo "Testing Route";
    //return view('welcome');
});


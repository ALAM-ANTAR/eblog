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

//get, post, put, patch, delete http verb

/*Frontend*/

Route::get('/contact', function (){

return view('contact');
});

/* Frontend Route Start */

Route::get('/', 'PublicController@index');
Route::get('/cart', 'PublicController@cart');
Route::get('/category', 'PublicController@category');
Route::get('/checkout', 'PublicController@checkout');
Route::get('/contact', 'PublicController@contact');


/* Frontend Route Finish   Ok*/



Route::prefix('admin')->group(function(){

    /* Category Route backend Start*/

    Route::get('/categories', 'CategoryController@index')->name('categories.index');
    Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
    Route::get('/categories/{id}', 'CategoryController@show')->name('categories.show');
    Route::get('/categories/{id}/edit', 'CategoryController@show')->name('categories.edit');

    /* Category Route Finish*/



    /* Product Route backend Start  Here*/

     Route::get('/products', 'ProductController@index')->name('products.index');
     Route::get('/products/create', 'ProductController@create')->name('products.create');
     Route::get('/products/{id}', 'ProductController@show')->name('products.show');
     Route::get('/products/{id}/edit', 'ProductController@show')->name('products.edit');

     /* Product Route backend Finish*/


    });


     Route::prefix('user')->group(function(){

        Route::get('/login', 'UserAccount@login')->name('users.index');
        Route::get('/registration', 'UserAccount@registration')->name('users.registration');

    });
















Route::get('/home', function (){
    return view('backend.home');
});//edit










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
Route::get('/', function (){

    return view('index');
});

Route::get('/cart', function (){

return view('cart');
});

Route::get('/category', function (){

return view('category');
});
Route::get('/checkout', function (){

return view('checkout');
});
Route::get('/contact', function (){

return view('contact');
});
Route::get('/', 'PublicController@index');
Route::get('/products', 'PublicController@products');
Route::get('/product_details', 'PublicController@show');


Route::prefix('admin')->group(function (){
    /*Category routes*/
    Route::get('/categories', 'CategoryController@index')->name('categories.index');//list
    Route::get('/categories/create', 'CategoryController@create')->name('categories.create');//create
    Route::get('/categories/{id}', 'CategoryController@show')->name('categories.show');//show
    Route::get('/categories/{id}/edit', 'CategoryController@edit');//edit

    /*Product routes*/


});


Route::get('/home', function (){
    return view('backend.home');
});//edit










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
Route::get('/category', 'PublicController@categoty');
Route::get('/checkout', 'PublicController@checkout');
Route::get('/contact', 'PublicController@contact');


/* Frontend Route Finish  */


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










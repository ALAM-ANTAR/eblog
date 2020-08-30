<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function index()
     {
     return view('backend.products.index');
     }

     public function create()
     {
     return view('backend.products.create');
     }

     public function show($id)
     {
     return view('backend.products.show');
     }

     public function edit($id)
     {
     dd('I am from edit page .'.$id);
     }
    //
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
         return view('frontend.index');
    }
     public function cart()
     {
     return view('frontend.cart');
     }
      public function category()
     {
        return view('frontend.category');
     }

     public function checkout()
     {
         return view('frontend.checkout');
     }
     public function contact()
     {
         return view('frontend.contact');
     }


}

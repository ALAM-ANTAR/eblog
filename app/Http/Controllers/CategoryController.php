<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function backendcreate()
    {
        return view('backend.categories.create');
    }

    public function backendshow($id)
    {
        return view('backend.categories.show');
    }

    public function backendedit($id)
    {
        dd('I am from edit page .'.$id);
    }
}

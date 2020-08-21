<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return view('backend.categories.index');
    }

    public function create()
    {
        return view('backend.categories.create');
    }

    public function show($id)
    {
        return view('backend.categories.show');
    }

    public function edit($id)
    {
        dd('I am from edit page .'.$id);
    }
}

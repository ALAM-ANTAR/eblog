<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAccount extends Controller
{
        public function login()
        {

            return view('frontend.login.index');

        }

        public function registration()
        {
            return view('frontend.login.newregister');

        }
}

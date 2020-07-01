<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome(Request $request){
        $FirstName = $request["FirstName"];
        $LastName = $request["LastName"];
        return view('welcome', compact('FirstName', 'LastName'));
    }
}

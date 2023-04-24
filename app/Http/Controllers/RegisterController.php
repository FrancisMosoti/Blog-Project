<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function register(){
        // show register page
        return view('register');

    }

    public function store($request){
        // for data storing purposes
        redirect('/');
    } 
}

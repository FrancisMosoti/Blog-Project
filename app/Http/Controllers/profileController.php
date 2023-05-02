<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Users;

class profileController extends Controller
{
    //

    public function profile(){
        $data = array();
        if(Session::has('email')){
        $data = Users::where('email', '=', Session::get('email'))->first();
        }
        return view('profile', compact('data')); 
    }

    public function logout(){
        if(Session::has('email')){
            Session::pull('email');
            return redirect('login'); 
        }
    }
}

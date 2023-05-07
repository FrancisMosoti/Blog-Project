<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Posts;
use Session;

class HomeController extends Controller
{

    //
    //     public function profile(){
            
    //     $data = array();
    //     if(Session::has('email')){
    //     $data = Users::where('email', '=', Session::get('email'))->first();
    //     }
    //     return view('home', ['data'=>$data]); 
    // }
    public function show(){
        return view('home', ['posts'=>Posts::all()]);
    }


    public function logout(){
        if(Session::has('email')){
            Session::pull('email');
            return redirect('login'); 
        }
    }


}

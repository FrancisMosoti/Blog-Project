<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class RegisterController extends Controller
{
    //
    public function register(){
        // show register page
        return view('register');

    }

    public function store(Request $request){
        // for data storing purposes
        $user = new Users();

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        echo "done";
        redirect('/login');
    } 
}

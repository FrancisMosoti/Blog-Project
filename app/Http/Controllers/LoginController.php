<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;
use Session;

class LoginController extends Controller
{
    //
        public function login(){
        // show register page
        return view('login');

    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

         $user = Users::all();

        $user = Users::where('email', '=', $credentials['email'])->first();
        if($user){
            if(Hash::check($credentials['password'], $user->password)){
                $request->session()->put('email', $user->email);
                return redirect("/home"); 

            }else{
            return back()->with('fail', 'Password do not match our records.');    
            }

        }else{
            return back()->with('fail', 'Email is not registered');
        }
 
        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
 
        //     return redirect('/home');
        // }
 
        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');
    }
}

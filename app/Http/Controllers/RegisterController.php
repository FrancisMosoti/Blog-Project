<?php
namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\Password;

use Illuminate\Http\Request;
use App\Models\Users;

class RegisterController extends Controller
{
    //
    public function register(){
        // show register page
        return view('register');

    }

    public function store(Request $request):RedirectResponse
    {

        // validation
        $validated = $request->validate([
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|email:rfc,dns',
            'phone' => 'required',
            'password' => ['required','confirmed', Password::min(8)]
        ]);



        // for data storing purposes
        $user = new Users();

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return redirect('/users');
    } 
}

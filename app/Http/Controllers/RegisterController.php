<?php
namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\Password;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Rules\validatePhone;

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
            'phone' => 'required|numeric|min:9 |starts_with : 254,07,01',
            // 'phone' => ['required', "numeric", new validatePhone],
            'password' => ['required','confirmed', Password::min(8)],
            'password_confirmation' => ['required', Password::min(8)]

        ]);

        var_dump($errors);

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

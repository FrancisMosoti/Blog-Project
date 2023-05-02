<?php
namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

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

        // for data storing purposes
        $user = new Users();

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        if($user){
            return back()->with('success','Successfully registered');
        }else{
            return back()->with('fail','Failed to register');

        }

        // return redirect('/users');
    } 
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    public function show(Request $request)
    {
        $user = Users::all();

        return view('users',['users' => $user]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use Sessions;

class PostController extends Controller
{
    //
     public function store(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'title' => [ 'max:100'],
            'body' => [ 'max:200']
        ]);

        // dd($credentials);

        Posts::create([
            'title' => $credentials->input('title'),
            'body' => $credentials->input('body'),
            'user_id' => $credentials -> Users()->id
        ]);

        Session()->flash('message', 'Post created successfully');

        return back();
    }
}

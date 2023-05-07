<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Users;
use Session;

class PostController extends Controller
{
    //
     public function store(Request $request)
    {
        $credentials = $request->validate([
            'title' => [ 'required','max:100'],
            'body' => [ 'required','max:1000']
        ]);

        // dd($credentials);

        // Posts::create([
        //     'title' => $credentials->input('title'),
        //     'body' => $credentials->input('body'),
        //     'user_id' => $credentials -> Users()->id
        // ]);

        // for data storing purposes
        if(Session::has('email')){
        $data = Users::where('email', '=', Session::get('email'))->first();
        }

        $post = new Posts();

        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = 2;

        $post->save();

        Session()->flash('success', 'Post created successfully');

        return redirect('home');
    }

    public function post(){
        return view('post');
    }


}

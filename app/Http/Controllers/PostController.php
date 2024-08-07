<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            "title" => "All Posts",
            // "posts" =>  Post::all()
             // ini eagel loading untuk efisiansei dan mengatasi n+1 problem
            "posts" =>  Post::with(['author','category'])->latest()->get()
            // "posts" =>  Post::latest()->get()
        
        ]);
    }

    public function show(Post $post){
        return view('post',[
            "title" => "Singel Post",
            "post" => $post
        ]);
    }
}

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Baihaqi"
    ]);
});


Route::get('/blog', function () {
    $blog_post = [
        [
        "title" => "Posts 1",
        "slug" => "posts-1",
        "author" => "Baihaqi",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Unde alias iure reprehenderit quia debitis sit a dignissimos sunt, omnis, 
        facilis perferendis nisi minus ut sint. Repellat cum magni at eum."
    ],
        [
        "title" => "Posts 2",
        "slug" => "posts-2",
        "author" => "Baihaqi 2",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Unde alias iure reprehenderit quia debitis sit a dignissimos sunt, omnis, 
        facilis perferendis nisi minus ut sint. Repellat cum magni at eum."
    ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_post
    ]);
});

Route::get('posts/{slug}',function($slug){

    $blog_post = [
        [
        "title" => "Posts 1",
        "slug" => "posts-1",
        "author" => "Baihaqi",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Unde alias iure reprehenderit quia debitis sit a dignissimos sunt, omnis, 
        facilis perferendis nisi minus ut sint. Repellat cum magni at eum."
    ],
        [
        "title" => "Posts 2",
        "slug" => "posts-2",
        "author" => "Baihaqi 2",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Unde alias iure reprehenderit quia debitis sit a dignissimos sunt, omnis, 
        facilis perferendis nisi minus ut sint. Repellat cum magni at eum."
    ],
    ];

    $new_post =[];
foreach($blog_post as $post){
    if($post["slug"] === $slug){
        $new_post = $post;
    }
}

    return view('post',[
        "title" => "Singel Post",
        "post" => $new_post
    ]);
});
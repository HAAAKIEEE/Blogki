<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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


Route::get('/posts', [PostController::class,'index']);
Route::get('posts/{post:slug}',[PostController::class,'show']);

Route::get('/categories',function(){
    return view('categories',[
        'title'=>'Post Categories',
        'categories'=>Category::all()
    ]);

});

Route::get('/categories/{category:slug}',function(Category $category){
    return view('posts',[
        'title'=>"Post by Category : $category->nama",
        'posts'=> $category->posts->load('author','category'),
        // ini leazy eagel untuk efisiansei dan mengatasi n+1
        'category'=>$category->nama
    ]);

});

Route::get('/authors/{user:username}',function(User $user){
    return view('posts',[
        'title'=>"User Post : $user->name",
        'posts'=> $user->posts->load('author','category'),
    ]);
});
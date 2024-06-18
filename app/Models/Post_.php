<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }
class Postss
{
    private static $blog_posts = [
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
    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug',$slug);
    }
}

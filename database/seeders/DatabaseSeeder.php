<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       

        // User::factory()->create([
        //     'name' => 'Junu',
        //     'email' => 'test@example.com',
        //     'password'=> bcrypt('12345')
        // ]);
        // User::factory()->create([
        //     'name' => 'Baihaqi',
        //     'email' => 'haqi@example.com',
        //     'password'=> bcrypt('12345')
        // ]);

        User::factory(5)->create();
        Category::create([
            'nama' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'nama' => 'UI/UX',
            'slug' => 'ui-ux'
        ]);

        Category::create([
            'nama' => 'Mobile Development',
            'slug' => 'mobile-development'
        ]);
        Post::factory(20)->create();
        // $categoryIds = Category::pluck('id');

        // // Mengisi tabel posts dengan data
        // Post::create([
        //     'category_id' => $categoryIds->random(), // Pilih category_id secara acak
        //     'user_id' => 2, // User ID statis
        //     'title' => 'Judul Postingan Pertama', // Judul postingan
        //     'slug' => 'judul-postingan-Pertama', // Slug dari judul
        //     'excerpt' => 'Ini adalah excerpt dari postingan pertama.', // Excerpt
        //     'body' => 'Ini adalah isi lengkap dari postingan pertama. Bisa berisi beberapa paragraf panjang untuk menggambarkan isi dari postingan.' // Body
        // ]);

        // Post::create([
        //     'category_id' => $categoryIds->random(), // Pilih category_id secara acak
        //     'user_id' => 2, // User ID statis
        //     'title' => 'Judul Postingan Kedua', // Judul postingan
        //     'slug' => 'judul-postingan-kedua', // Slug dari judul
        //     'excerpt' => 'Ini adalah excerpt dari postingan kedua.', // Excerpt
        //     'body' => 'Ini adalah isi lengkap dari postingan kedua. Berisi informasi yang lebih mendetail tentang topik yang dibahas.' // Body
        // ]);
        // Post::create([
        //     'category_id' => $categoryIds->random(), // Pilih category_id secara acak
        //     'user_id' => 1, // User ID statis
        //     'title' => 'Judul Postingan Ketiga', // Judul postingan
        //     'slug' => 'judul-postingan-ketiga', // Slug dari judul
        //     'excerpt' => 'Ini adalah excerpt dari postingan kedua.', // Excerpt
        //     'body' => 'Ini adalah isi lengkap dari postingan kedua. Berisi informasi yang lebih mendetail tentang topik yang dibahas.' // Body
        // ]);
        // Post::create([
        //     'category_id' => $categoryIds->random(), // Pilih category_id secara acak
        //     'user_id' => 2, // User ID statis
        //     'title' => 'Judul Postingan Keempat', // Judul postingan
        //     'slug' => 'judul-postingan-keempat', // Slug dari judul
        //     'excerpt' => 'Ini adalah excerpt dari postingan kedua.', // Excerpt
        //     'body' => 'Ini adalah isi lengkap dari postingan kedua. Berisi informasi yang lebih mendetail tentang topik yang dibahas.' // Body
        // ]);
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => mt_rand(1,3), // Pilih category_id secara acak
            'user_id' => mt_rand(1,5), // User ID statis
            'title' => $this->faker->sentence(mt_rand(2,8)), // Judul postingan
            'slug' => $this->faker->slug(), // Slug dari judul
            'excerpt' => $this->faker->paragraph(), // Excerpt
            'body' => $this->faker->paragraph(mt_rand(6,10)) // Body
       
        ];
    }
}

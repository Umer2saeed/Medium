<?php

namespace Database\Factories;

use App\Models\Category;
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
        $title = $this->faker->sentence;
        return [
            "title" => $title,
            "slug" => \Illuminate\Support\Str::slug($title),
            "content" => $this->faker->paragraph(5),
            "image" => fake()->imageUrl(),
            "status" => 1,
            "category_id" => Category::inRandomOrder()->first()->id,
            "user_id" => 1,
            "published_at" => fake()->optional()->dateTime(),
        ];
    }
}

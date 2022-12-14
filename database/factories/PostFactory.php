<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {
        return [
            'title' => fake()->unique()->text(50),
            'slug' => function (array $attributes) {
                return Str::slug($attributes['title']);
            },
            'content' => fake()->paragraph(10),
            'photo' => function (array $attributes) {
                return $this->faker->loremflickr('posts', $attributes['slug']);
            },
            'user_id' => User::query()->inRandomOrder()->value('id')
        ];
    }
}

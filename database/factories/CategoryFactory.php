<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->unique()->name(),
            'slug' => function (array $attributes) {
                return Str::slug($attributes['title']);
            },
            'photo' => function (array $attributes) {
                return $this->faker->loremflickr('categories', $attributes['slug']);
            },
        ];
    }
}

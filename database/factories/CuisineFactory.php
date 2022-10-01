<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cuisine>
 */
class CuisineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->unique()->country(),
            'slug' => function (array $attributes) {
                return Str::slug($attributes['title']);
            },
            'description' => fake()->paragraph(),
            'photo' => function (array $attributes) {
                return $this->faker->loremflickr('cuisines', $attributes['slug']);
            },
        ];
    }
}

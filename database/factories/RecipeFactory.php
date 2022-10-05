<?php

namespace Database\Factories;

use App\Models\Cuisine;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $cuisinesCount = Cuisine::all()->count();
        return [
            'title' => fake()->unique()->text(50),
            'slug' => function (array $attributes) {
                return Str::slug($attributes['title']);
            },
            'cuisine_id' => rand(1, $cuisinesCount),
            'cooking_time' => rand(1, 60) . ' minutes',
            'servings' => rand(1, 10),
            'level' => Recipe::LEVELS[rand(0, 2)],
            'photo' => function (array $attributes) {
                return $this->faker->loremflickr('posts', Str::slug($attributes['title']));
            },
            'description' => fake()->paragraph(10)
        ];
    }
}

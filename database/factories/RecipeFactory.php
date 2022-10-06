<?php

namespace Database\Factories;

use App\Models\Cuisine;
use App\Models\Recipe;
use App\Models\User;
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
        return [
            'title' => fake()->unique()->text(50),
            'slug' => function (array $attributes) {
                return Str::slug($attributes['title']);
            },
            'cuisine_id' => Cuisine::query()->inRandomOrder()->value('id'),
            'user_id' => User::query()->inRandomOrder()->value('id'),
            'cooking_time' => fake()->numberBetween(10, 60) . ' minutes',
            'servings' => fake()->numberBetween(1, 10),
            'level' => Recipe::LEVELS[fake()->numberBetween(0, 2)],
            'photo' => function (array $attributes) {
                return $this->faker->loremflickr('recipes', Str::slug($attributes['title']));
            },
            'description' => fake()->paragraph(10)
        ];
    }
}

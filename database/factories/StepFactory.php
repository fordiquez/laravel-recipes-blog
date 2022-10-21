<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Step>
 */
class StepFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'recipe_id' => Recipe::inRandomOrder()->first()->value('id'),
            'step' => 1,
            'description' => fake()->text(),
            'photo' => $this->faker->loremflickr('steps')
        ];
    }
}

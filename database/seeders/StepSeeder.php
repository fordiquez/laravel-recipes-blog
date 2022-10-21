<?php

namespace Database\Seeders;

use App\Models\Recipe;
use App\Models\Step;
use Illuminate\Database\Seeder;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $recipes = Recipe::all();
        $recipes->each(function ($recipe) {
            Step::factory(1)->create([
                'recipe_id' => $recipe->id,
            ]);
        });
    }
}

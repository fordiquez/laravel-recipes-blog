<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipes = Recipe::all();
        $recipes->each(function ($recipe) {
            Ingredient::factory(rand(1, 5))->create([
                'recipe_id' => $recipe->id
            ]);
        });
    }
}

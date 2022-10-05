<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $recipes = Recipe::factory(10)->create();
        $recipes->each(function ($recipe) use($categories, $tags) {
            $recipe->categories()->attach($categories->random(rand(1, $categories->count() / 2))->pluck('id')->toArray());
            $recipe->tags()->attach($tags->random(rand(1, $tags->count() / 2))->pluck('id')->toArray());
        });
    }
}

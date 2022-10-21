<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Recipe;

class IndexController extends Controller
{
    public function index()
    {
        $recipes = Recipe::where('published', true)->get();
        $carousel = $recipes->random(3);
        $randomRecipes = $recipes->random(3);
        $singleRecipe = Recipe::orderByDesc('likes_count')->first();
        $trendingRecipes = Recipe::whereNot('id', $singleRecipe->id)->orderByDesc('likes_count')->limit(6)->get();

        return view('main.index', compact('carousel', 'randomRecipes', 'singleRecipe', 'trendingRecipes'));
    }
}

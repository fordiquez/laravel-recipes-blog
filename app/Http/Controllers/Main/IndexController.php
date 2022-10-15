<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Recipe;

class IndexController extends Controller
{
    public function index()
    {
        $carousel = Recipe::query()->whereIn('id', [11, 12, 13])->get();
        $recipes = Recipe::all();
        $randomRecipes = $recipes->random(3);
        $singleRecipe = $recipes->random(1)->first();
        $trendingRecipes = $recipes->random(6);
        return view('main.index', compact('carousel', 'randomRecipes', 'singleRecipe', 'trendingRecipes'));
    }
}

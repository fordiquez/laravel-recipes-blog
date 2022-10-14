<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Recipe;
use App\Models\Tag;

class IndexController extends Controller
{
    public function index()
    {
        $carousel = Recipe::query()->whereIn('id', [11, 12, 13])->get();
        $randomRecipes = Recipe::all()->random(3);
        $singleRecipe = Recipe::all()->random(1)->first();
        $trendingRecipes = Recipe::all()->random(6);
        $cuisines = Cuisine::withCount('recipes')->orderBy('recipes_count', 'DESC')->get()->take(10);
        $categories = Category::withCount('recipes')->orderBy('recipes_count', 'DESC')->get()->take(10);
        $tags = Tag::withCount('recipes')->orderBy('recipes_count', 'DESC')->get()->take(10);
        return view('main.index', compact('carousel', 'randomRecipes', 'singleRecipe', 'trendingRecipes', 'cuisines', 'categories', 'tags'));
    }
}

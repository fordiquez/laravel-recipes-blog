<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Filters\RecipeFilter;
use App\Http\Requests\Main\Recipe\FilterRequest;
use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Recipe;
use App\Models\Tag;

class RecipeController extends Controller
{
    public function index(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = new RecipeFilter(array_filter($data));
        $recipes = Recipe::filter($filter)->paginate(10)->withQueryString();
        $categories = Category::all();
        $cuisines = Cuisine::all();
        $tags = Tag::all();
        $levels = Recipe::getLevels();

        return view('main.recipes.index', compact('recipes', 'categories', 'cuisines', 'tags', 'levels'));
    }

    public function show(string $slug)
    {
        $recipe = Recipe::where('slug', $slug)->first();

        return view('main.recipes.show', compact('recipe'));
    }
}

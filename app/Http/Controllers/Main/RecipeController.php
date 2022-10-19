<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Filters\RecipeFilter;
use App\Http\Requests\Main\Recipe\FilterRequest;
use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Recipe;
use App\Models\Tag;
use App\Models\User;

class RecipeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create');
    }

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

        if (!$recipe) return view('components.main.404');

        return view('main.recipes.show', compact('recipe'));
    }

    public function create() {
        $cuisines = Cuisine::all();
        $categories = Category::all();
        $tags = Tag::all();
        $levels = Recipe::getLevels();

        return view('main.recipes.create', compact('cuisines', 'categories', 'tags', 'levels'));
    }

    public function store() {
        dd(request()->all());
    }
}

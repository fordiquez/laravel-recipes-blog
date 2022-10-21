<?php

namespace App\Http\Controllers\Main;

use App\Actions\Recipe\StoreAction;
use App\Actions\Recipe\UpdateAction;
use App\Http\Controllers\Controller;
use App\Http\Filters\RecipeFilter;
use App\Http\Requests\Main\Recipe\FilterRequest;
use App\Http\Requests\Main\Recipe\StoreRequest;
use App\Http\Requests\Main\Recipe\UpdateRequest;
use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Recipe;
use App\Models\Tag;

class RecipeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = new RecipeFilter(array_filter($data));
        $recipes = Recipe::filter($filter)->where('published', true)->paginate(10)->withQueryString();
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

    public function create()
    {
        $cuisines = Cuisine::all();
        $categories = Category::all();
        $tags = Tag::all();
        $levels = Recipe::getLevels();

        return view('main.recipes.create', compact('cuisines', 'categories', 'tags', 'levels'));
    }

    public function store(StoreRequest $request, StoreAction $action)
    {
        $data = $request->validated();
        $action->handle($data);

        return back();
    }

    public function edit(string $slug)
    {
        $recipe = Recipe::where('slug', $slug)->first();

        if (!$recipe) return view('components.main.404');
        elseif ($recipe->user_id !== auth()->user()->id) return back();

        $cuisines = Cuisine::all();
        $categories = Category::all();
        $tags = Tag::all();
        $levels = Recipe::getLevels();

        return view('main.recipes.edit', compact('recipe', 'cuisines', 'categories', 'tags', 'levels'));
    }

    public function update(UpdateRequest $request, Recipe $recipe, UpdateAction $action)
    {
        if ($recipe->user_id === auth()->user()->id) {
            $data = $request->validated();
            $action->handle($data, $recipe);
        }

        return back();
    }

    public function destroy(Recipe $recipe)
    {
        if ($recipe->user_id === auth()->user()->id) {
            $recipe->delete();
        }

        return back();
    }

    public function likes(Recipe $recipe) {
        auth()->user()->likes()->toggle($recipe->id);

        return back();
    }
}

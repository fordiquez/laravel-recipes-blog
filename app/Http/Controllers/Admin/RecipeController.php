<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Recipe\StoreRequest;
use App\Http\Requests\Admin\Recipe\UpdateRequest;
use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Recipe;
use App\Models\Tag;
use App\Services\RecipeService;

class RecipeController extends Controller
{
    public $recipeService;

    public function __construct(RecipeService $recipeService)
    {
        $this->recipeService = $recipeService;
    }

    public function index() {
        $recipes = Recipe::all();
        return view('admin.recipes.index', compact('recipes'));
    }

    public function create() {
        $cuisines = Cuisine::all();
        $categories = Category::all();
        $tags = Tag::all();
        $levels = Recipe::getLevels();
        return view('admin.recipes.create', compact('cuisines', 'categories', 'tags', 'levels'));
    }

    public function store(StoreRequest $request) {
        $data = $request->validated();
        $this->recipeService->store($data);

        return redirect()->route('admin.recipes.index');
    }

    public function show(Recipe $recipe) {
        return view('admin.recipes.show', compact('recipe'));
    }

    public function edit(Recipe $recipe) {
        $cuisines = Cuisine::all();
        $categories = Category::all();
        $tags = Tag::all();
        $levels = Recipe::getLevels();
        return view('admin.recipes.edit', compact('recipe', 'cuisines', 'categories', 'tags', 'levels'));
    }

    /**
     * @throws \Throwable
     */
    public function update(UpdateRequest $request, Recipe $recipe) {
        $data = $request->validated();
        $recipe = $this->recipeService->update($data, $recipe);

        return view('admin.recipes.show', compact('recipe'));
    }

    public function destroy(Recipe $recipe) {
        $recipe->delete();

        return redirect()->route('admin.recipes.index');
    }
}

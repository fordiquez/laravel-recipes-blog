<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Recipe\StoreAction;
use App\Actions\Recipe\UpdateAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Recipe\StoreRequest;
use App\Http\Requests\Admin\Recipe\UpdateRequest;
use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Recipe;
use App\Models\Tag;
use App\Models\User;

class RecipeController extends Controller
{
    public function index() {
        $recipes = Recipe::paginate(10);
        return view('admin.recipes.index', compact('recipes'));
    }

    public function create() {
        $cuisines = Cuisine::all();
        $users = User::all();
        $categories = Category::all();
        $tags = Tag::all();
        $levels = Recipe::getLevels();
        return view('admin.recipes.create', compact('cuisines', 'categories', 'tags', 'levels', 'users'));
    }

    public function store(StoreRequest $request, StoreAction $action) {
        $data = $request->validated();
        $action->handle($data);

        return redirect()->route('admin.recipes.index');
    }

    public function show(Recipe $recipe) {
        return view('admin.recipes.show', compact('recipe'));
    }

    public function edit(Recipe $recipe) {
        $cuisines = Cuisine::all();
        $users = User::all();
        $categories = Category::all();
        $tags = Tag::all();
        $levels = Recipe::getLevels();
        return view('admin.recipes.edit', compact('recipe', 'cuisines', 'categories', 'tags', 'levels', 'users'));
    }

    /**
     * @throws \Throwable
     */
    public function update(UpdateRequest $request, Recipe $recipe, UpdateAction $action) {
        $data = $request->validated();
        $recipe = $action->handle($data, $recipe);

        return view('admin.recipes.show', compact('recipe'));
    }

    public function destroy(Recipe $recipe) {
        $recipe->delete();

        return redirect()->route('admin.recipes.index');
    }
}

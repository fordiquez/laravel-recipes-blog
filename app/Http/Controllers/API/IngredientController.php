<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Ingredient\StoreRequest;
use App\Http\Resources\IngredientResource;
use App\Models\Ingredient;

class IngredientController extends Controller
{
    public function store(StoreRequest $request) {
        $data = $request->validated();
        $ingredient = Ingredient::create($data);

        return new IngredientResource($ingredient);
    }

    public function destroy(Ingredient $ingredient) {
        $ingredient->delete();

        return new IngredientResource($ingredient);
    }

    public function show(Ingredient $ingredient) {
        return new IngredientResource($ingredient);
    }
}

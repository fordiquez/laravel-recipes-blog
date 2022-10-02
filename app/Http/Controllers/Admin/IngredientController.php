<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Ingredient\StoreRequest;
use App\Models\Ingredient;

class IngredientController extends Controller
{
    public function store(StoreRequest $request) {
        $data = $request->validated();
        $ingredient = Ingredient::create($data);

        return response()->json($ingredient);
    }
}

<?php

use App\Http\Controllers\API\IngredientController;
use App\Http\Controllers\API\StepController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::name('api.')->middleware('auth:sanctum')->group(function () {
    Route::apiResource('ingredients', IngredientController::class);
    Route::apiResource('steps', StepController::class);
});

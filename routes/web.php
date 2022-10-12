<?php

use App\Http\Controllers\Main\PersonalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['verify' => true]);

Route::get('/', [\App\Http\Controllers\Main\IndexController::class, 'index'])->name('main.index');
Route::prefix('categories')->controller(\App\Http\Controllers\Main\CategoryController::class)->group(function () {
    Route::get('/', 'index')->name('main.categories.index');
});

Route::prefix('recipes')->controller(\App\Http\Controllers\Main\RecipeController::class)->group(function () {
    Route::get('/', 'index')->name('main.recipes.index');
    Route::get('/{recipe}', 'show')->name('main.recipes.show');
});

Route::prefix('blog')->controller(\App\Http\Controllers\Main\BlogController::class)->group(function () {
    Route::get('/', 'index')->name('main.blog.index');
    Route::get('/{post}', 'show')->name('main.blog.show');
});
Route::prefix('personal')->middleware(['auth', 'verified'])->controller(PersonalController::class)->group(function () {
    Route::get('/liked-posts', 'likedPosts')->name('main.personal.liked-posts');
    Route::delete('/{post}', 'dislikePost')->name('main.personal.dislike-post');
});

Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin', 'verified'])->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\IndexController::class, 'index'])->name('index');
    Route::resources([
        'users' => \App\Http\Controllers\Admin\UserController::class,
        'cuisines' => \App\Http\Controllers\Admin\CuisineController::class,
        'categories' => \App\Http\Controllers\Admin\CategoryController::class,
        'tags' => \App\Http\Controllers\Admin\TagController::class,
        'recipes' => \App\Http\Controllers\Admin\RecipeController::class,
        'posts' => \App\Http\Controllers\Admin\PostController::class,
    ]);
});

Route::fallback(function () {
    dd(404);
});

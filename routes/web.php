<?php
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::name('main.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Main\IndexController::class, 'index'])->name('index');
    Route::get('/cuisines', [\App\Http\Controllers\Main\CuisineController::class, 'index'])->name('cuisines.index');
    Route::get('/categories', [\App\Http\Controllers\Main\CategoryController::class, 'index'])->name('categories.index');


    Route::resource('recipes', \App\Http\Controllers\Main\RecipeController::class);

    Route::prefix('posts')->controller(\App\Http\Controllers\Main\PostController::class)->group(function () {
        Route::get('/', 'index')->name('posts.index');
        Route::get('/{post}', 'show')->name('posts.show');
    });
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
    return view('components.main.404');
});

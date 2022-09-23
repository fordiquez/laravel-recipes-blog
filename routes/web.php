<?php

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

Auth::routes();

Route::name('main.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Main\IndexController::class, 'index'])->name('main.index');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\IndexController::class, 'index'])->name('admin.index');
    Route::prefix('categories')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin.category.show');
        Route::get('/{category}/edit', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::patch('/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin.category.update');
        Route::delete('/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin.category.destroy');
    });
});

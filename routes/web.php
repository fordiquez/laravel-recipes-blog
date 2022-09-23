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
    Route::prefix('categories')->controller(\App\Http\Controllers\Admin\CategoryController::class)->group(function () {
        Route::get('/', 'index')->name('admin.category.index');
        Route::get('/create', 'create')->name('admin.category.create');
        Route::post('/', 'store')->name('admin.category.store');
        Route::get('/{category}', 'show')->name('admin.category.show');
        Route::get('/{category}/edit', 'edit')->name('admin.category.edit');
        Route::patch('/{category}', 'update')->name('admin.category.update');
        Route::delete('/{category}', 'destroy')->name('admin.category.destroy');
    });
    Route::prefix('tags')->controller(\App\Http\Controllers\Admin\TagController::class)->group(function () {
        Route::get('/', 'index')->name('admin.tag.index');
        Route::get('/create', 'create')->name('admin.tag.create');
        Route::post('/', 'store')->name('admin.tag.store');
        Route::get('/{tag}', 'show')->name('admin.tag.show');
        Route::get('/{tag}/edit', 'edit')->name('admin.tag.edit');
        Route::patch('/{tag}', 'update')->name('admin.tag.update');
        Route::delete('/{tag}', 'destroy')->name('admin.tag.destroy');
    });
});

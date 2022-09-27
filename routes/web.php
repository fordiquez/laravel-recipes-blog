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
Route::prefix('blog')->controller(\App\Http\Controllers\Main\BlogController::class)->group(function () {
    Route::get('/', 'index')->name('main.blog.index');
    Route::get('/{post}', 'show')->name('main.blog.show');
});
Route::prefix('personal')->middleware(['auth', 'verified'])->controller(PersonalController::class)->group(function () {
    Route::get('/liked-posts', 'likedPosts')->name('main.personal.liked-posts');
    Route::delete('/{post}', 'dislikePost')->name('main.personal.dislike-post');
});

Route::prefix('admin')->middleware(['auth', 'admin', 'verified'])->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\IndexController::class, 'index'])->name('admin.index');
    Route::prefix('users')->controller(\App\Http\Controllers\Admin\UserController::class)->group(function () {
        Route::get('/', 'index')->name('admin.user.index');
        Route::get('/create', 'create')->name('admin.user.create');
        Route::post('/', 'store')->name('admin.user.store');
        Route::get('/{user}', 'show')->name('admin.user.show');
        Route::get('/{user}/edit', 'edit')->name('admin.user.edit');
        Route::patch('/{user}', 'update')->name('admin.user.update');
        Route::delete('/{user}', 'destroy')->name('admin.user.destroy');
    });
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
    Route::prefix('posts')->controller(\App\Http\Controllers\Admin\PostController::class)->group(function () {
        Route::get('/', 'index')->name('admin.post.index');
        Route::get('/create', 'create')->name('admin.post.create');
        Route::post('/', 'store')->name('admin.post.store');
        Route::get('/{post}', 'show')->name('admin.post.show');
        Route::get('/{post}/edit', 'edit')->name('admin.post.edit');
        Route::patch('/{post}', 'update')->name('admin.post.update');
        Route::delete('/{post}', 'destroy')->name('admin.post.destroy');
    });
});

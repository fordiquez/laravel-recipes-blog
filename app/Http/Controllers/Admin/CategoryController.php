<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create() {
        return view('admin.categories.create');
    }

    public function store(StoreRequest $request) {
        $data = $request->validated();
        Category::create($data);

        return redirect()->route('admin.category.index');
    }

    public function show(Category $category) {
        return view('admin.categories.show', compact('category'));
    }

    public function edit(Category $category) {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * @throws \Throwable
     */
    public function update(UpdateRequest $request, Category $category) {
        $data = $request->validated();
        $category->updateOrFail($data);

        return view('admin.categories.show', compact('category'));
    }

    public function destroy(Category $category) {
        $category->delete();
        return redirect(route('admin.category.index'));
    }
}

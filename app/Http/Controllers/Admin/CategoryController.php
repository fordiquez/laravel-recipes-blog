<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    public function create() {
        $categories = Category::all();
        return view('admin.categories.create', compact('categories'));
    }

    public function store(StoreRequest $request) {
        $data = $request->validated();
        Category::create($data);

        return redirect()->route('admin.categories.index');
    }

    public function show(Category $category) {
        return view('admin.categories.show', compact('category'));
    }

    public function edit(Category $category) {
        $categories = Category::where('slug', '!=', $category->slug)->get();
        return view('admin.categories.edit', compact('category', 'categories'));
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
        $category->forceDelete();

        return redirect()->route('admin.categories.index');
    }
}

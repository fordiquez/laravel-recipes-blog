<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Http\Requests\Admin\Tag\UpdateRequest;
use App\Models\Tag;

class TagController extends Controller
{
    public function index() {
        $tags = Tag::all();

        return view('admin.tags.index', compact('tags'));
    }

    public function create() {
        return view('admin.tags.create');
    }

    public function store(StoreRequest $request) {
        $data = $request->validated();
        Tag::create($data);

        return redirect()->route('admin.tags.index');
    }

    public function show(Tag $tag) {
        return view('admin.tags.show', compact('tag'));
    }

    public function edit(Tag $tag) {
        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * @throws \Throwable
     */
    public function update(UpdateRequest $request, Tag $tag) {
        $data = $request->validated();
        $tag->updateOrFail($data);

        return view('admin.tags.show', compact('tag'));
    }

    public function destroy(Tag $tag) {
        $tag->forceDelete();

        return redirect()->route('admin.tags.index');
    }
}

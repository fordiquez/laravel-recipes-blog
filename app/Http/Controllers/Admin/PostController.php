<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    public function create() {
        return view('admin.posts.create');
    }

    public function store(StoreRequest $request) {
        $data = $request->validated();
        Post::create(Post::setPhoto($data));

        return redirect()->route('admin.posts.index');
    }

    public function show(Post $post) {
        return view('admin.posts.show', compact('post'));
    }

    public function edit(Post $post) {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * @throws \Throwable
     */
    public function update(UpdateRequest $request, Post $post) {
        $data = $request->validated();
        $post->updateOrFail(Post::setPhoto($data));

        return view('admin.posts.show', compact('post'));
    }

    public function destroy(Post $post) {
        $post->delete();

        return redirect()->route('admin.posts.index');
    }
}

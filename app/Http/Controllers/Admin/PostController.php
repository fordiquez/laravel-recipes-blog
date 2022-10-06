<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index() {
        $posts = Post::paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    public function create() {
        $users = User::all();
        return view('admin.posts.create', compact('users'));
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
        $users = User::all();
        return view('admin.posts.edit', compact('post', 'users'));
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

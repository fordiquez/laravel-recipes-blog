<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Services\PostService;

class PostController extends Controller
{
    public $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index() {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    public function create() {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    public function store(StoreRequest $request) {
        $data = $request->validated();
        $this->postService->store($data);

        return redirect()->route('admin.post.index');
    }

    public function show(Post $post) {
        return view('admin.posts.show', compact('post'));
    }

    public function edit(Post $post) {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * @throws \Throwable
     */
    public function update(UpdateRequest $request, Post $post) {
        $data = $request->validated();
        $post = $this->postService->update($data, $post);

        return view('admin.posts.show', compact('post'));
    }

    public function destroy(Post $post) {
        $post->delete();

        return redirect()->route('admin.post.index');
    }
}

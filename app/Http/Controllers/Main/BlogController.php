<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $posts = Post::paginate(3);
        $randomPosts = Post::get()->random(1);
        $likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(2);
        return view('main.blog.index', compact('posts'));
    }

    public function show(Post $post) {
        return view('main.blog.show', compact('post'));
    }
}

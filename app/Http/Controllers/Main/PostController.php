<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Post;
use App\Models\Recipe;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::paginate(10);
        return view('main.posts.index', compact('posts'));
    }

    public function show(Post $post) {
        dd($post);
        return view('main.posts.show', compact('post'));
    }
}

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
        $randomRecipes = Recipe::all()->random(3);
        $cuisines = Cuisine::withCount('recipes')->orderBy('recipes_count', 'DESC')->get()->take(10);
        $categories = Category::withCount('recipes')->orderBy('recipes_count', 'DESC')->get()->take(10);
        $tags = Tag::withCount('recipes')->orderBy('recipes_count', 'DESC')->get()->take(10);
        return view('main.posts.index', compact('posts', 'randomRecipes', 'cuisines', 'categories', 'tags'));
    }

    public function show(Post $post) {
        dd($post);
        return view('main.posts.show', compact('post'));
    }
}

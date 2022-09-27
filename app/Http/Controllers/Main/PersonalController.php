<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function likedPosts() {
        $posts = auth()->user()->likedPosts;
        return view('main.personal.liked-posts', compact('posts'));
    }

    public function dislikePost(Post $post) {
        auth()->user()->likedPosts()->detach($post->id);

        return redirect()->route('main.personal.liked-posts');
    }

    public function comments() {
        dd(auth()->user()->comments);
    }
}

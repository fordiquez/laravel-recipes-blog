<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Filters\UserFilter;
use App\Http\Requests\Main\User\FilterRequest;
use App\Models\User;

class AuthorController extends Controller
{
    public function index(FilterRequest $request) {
        $data = $request->validated();
        $filter = new UserFilter(array_filter($data));
        $authors = User::filter($filter)->withCount('recipes', 'posts', 'likes')->paginate(10)->withQueryString();

        return view('main.authors.index', compact('authors'));
    }

    public function show(string $slug) {
        $explodedSlug = explode('-', $slug);
        $author = User::where('first_name', $explodedSlug[0])->where('last_name', $explodedSlug[1])->first();

        if (!$author) return view('components.main.404');

        return view('main.authors.show', compact('author'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Recipe;
use App\Models\User;

class IndexController extends Controller
{
    public function index()
    {
        $data = [];
        $data['usersCount'] = User::all()->count();
        $data['cuisinesCount'] = Cuisine::all()->count();
        $data['categoriesCount'] = Category::all()->count();
        $data['recipesCount'] = Recipe::all()->count();

        return view('admin.index', compact('data'));
    }
}

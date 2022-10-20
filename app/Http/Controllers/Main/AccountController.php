<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Recipe;

class AccountController extends Controller
{
    public function index() {
        $user = auth()->user();

        return view('main.account.index', compact('user'));
    }

    public function recipes() {
        $recipes = Recipe::where('user_id', auth()->user()->id)->get();

        return view('main.account.recipes', compact('recipes'));
    }

    public function favorites() {
        return view('main.account.favorites');
    }

    public function details() {
        $user = auth()->user();

        return view('main.account.details', compact('user'));
    }
}

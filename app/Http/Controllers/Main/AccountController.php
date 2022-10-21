<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\User\UpdateRequest;
use App\Models\Recipe;
use App\Models\User;

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
        $recipes = auth()->user()->likes;

        return view('main.account.favorites', compact('recipes'));
    }

    public function details() {
        $user = auth()->user();

        return view('main.account.details', compact('user'));
    }

    public function update(UpdateRequest $request, User $user) {
        $data = $request->validated();
        $user->update(User::setPhoto($data));

        return view('main.account.details', compact('user'));
    }
}

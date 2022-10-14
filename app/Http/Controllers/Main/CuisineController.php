<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Cuisine;

class CuisineController extends Controller
{
    public function index() {
        $cuisines = Cuisine::all();

        return view('main.cuisines.index', compact('cuisines'));
    }
}

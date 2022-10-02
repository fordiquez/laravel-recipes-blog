<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Cuisine\StoreRequest;
use App\Http\Requests\Admin\Cuisine\UpdateRequest;
use App\Models\Cuisine;

class CuisineController extends Controller
{
    public function index() {
        $cuisines = Cuisine::paginate(10);
        return view('admin.cuisines.index', compact('cuisines'));
    }

    public function create() {
        return view('admin.cuisines.create');
    }

    public function store(StoreRequest $request) {
        $data = $request->validated();
        Cuisine::create(Cuisine::setPhoto($data));

        return redirect()->route('admin.cuisines.index');
    }

    public function show(Cuisine $cuisine) {
        return view('admin.cuisines.show', compact('cuisine'));
    }

    public function edit(Cuisine $cuisine) {
        return view('admin.cuisines.edit', compact('cuisine'));
    }

    /**
     * @throws \Throwable
     */
    public function update(UpdateRequest $request, Cuisine $cuisine) {
        $data = $request->validated();
        $cuisine->updateOrFail(Cuisine::setPhoto($data));

        return view('admin.cuisines.show', compact('cuisine'));
    }

    public function destroy(Cuisine $cuisine) {
        $cuisine->forceDelete();

        return redirect()->route('admin.cuisines.index');
    }
}

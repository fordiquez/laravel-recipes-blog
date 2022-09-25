<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create() {
        $roles = User::getRoles();
        return view('admin.users.create', compact('roles'));
    }

    public function store(StoreRequest $request) {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        User::create($data);

        return redirect()->route('admin.user.index');
    }

    public function show(User $user) {
        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user) {
        $roles = User::getRoles();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * @throws \Throwable
     */
    public function update(UpdateRequest $request, User $user) {
        $data = $request->validated();
        $user->update($data);

        return view('admin.users.show', compact('user'));
    }

    public function destroy(User $user) {
        $user->forceDelete();

        return redirect()->route('admin.user.index');
    }
}

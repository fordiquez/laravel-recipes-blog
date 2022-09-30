@extends('layouts.argon')

@section('title', 'Admin – Users – ' . $user->getFullName($user) . ' – Edit')

@section('content')
    <div class="card shadow-lg mx-4 card-profile-bottom">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="{{ asset($user->getPhoto($user)) }}" class="w-100 border-radius-lg shadow-sm"
                             alt="{{ $user->getFullName($user) }}" title="{{ $user->getFullName($user) }}">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">{{ $user->getFullName($user) }}</h5>
                        <p class="mb-0 font-weight-bold text-sm">{{ $user->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.users.update', $user) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Edit User</p>
                                <a href="{{ route('admin.users.index') }}" class="btn btn-primary btn-sm ms-auto mb-0">
                                    <i class="fa-solid fa-table-list"></i>
                                    <span class="ms-1">Users</span>
                                </a>
                                <button class="btn btn-success btn-sm ms-2 mb-0" type="submit">
                                    <i class="fa-solid fa-user-check"></i>
                                    <span class="ms-1">Update</span>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">User Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group @error('first_name') mb-0 @enderror">
                                        <label for="first_name" class="form-control-label">First name</label>
                                        <input class="form-control @error('first_name') is-invalid @enderror" type="text" name="first_name" id="first_name" value="{{ old('first_name', $user->first_name) }}" placeholder="User first name">
                                    </div>
                                    @error('first_name')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('last_name') mb-0 @enderror">
                                        <label for="last_name" class="form-control-label">First name</label>
                                        <input class="form-control @error('last_name') is-invalid @enderror" type="text" name="last_name" id="last_name" value="{{ old('last_name', $user->last_name) }}" placeholder="User last name">
                                    </div>
                                    @error('last_name')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('email') mb-0 @enderror">
                                        <label for="email" class="form-control-label">First name</label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" value="{{ old('email', $user->email) }}" placeholder="User email">
                                    </div>
                                    @error('email')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('role') mb-0 @enderror">
                                        <label for="example-text-input" class="form-control-label">Role</label>
                                        <div>
                                            @foreach($roles as $id => $role)
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="role" id="{{ $id }}" value="{{ $id }}" @checked($id == old('role', $user->role))>
                                                    <label class="custom-control-label" for="{{ $id }}">{{ $role }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @error('role')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <div class="form-group @error('photo') mb-0 @enderror">
                                        <label class="form-label" for="photo">Photo</label>
                                        <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" id="photo" accept="image/*">
                                    </div>
                                    @error('photo')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">Additional Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="created_at" class="form-control-label">Created at</label>
                                        <input class="form-control" type="text" name="created_at" id="created_at" value="{{ old('created_at', $user->created_at) }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="updated_at" class="form-control-label">Updated at</label>
                                        <input class="form-control" type="text" name="updated_at" id="updated_at" value="{{ old('updated_at', $user->updated_at) }}" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

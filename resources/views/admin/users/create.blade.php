@extends('layouts.admin')

@section('title', 'Admin – Users – Create')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.users.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Create User</p>
                                <a href="{{ route('admin.users.index') }}" class="btn btn-primary btn-sm ms-auto mb-0">
                                    <i class="fa-solid fa-table-list"></i>
                                    <span class="ms-1 d-none d-sm-inline-block">Users</span>
                                </a>
                                <button class="btn btn-success btn-sm ms-2 mb-0" type="submit">
                                    <i class="fa-solid fa-user-check"></i>
                                    <span class="ms-1 d-none d-sm-inline-block">Create</span>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">User Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="first_name" class="form-control-label">First name</label>
                                    <input class="form-control @error('first_name') is-invalid @enderror" type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" placeholder="User first name">
                                    @error('first_name')
                                        <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name" class="form-control-label">Last Name</label>
                                    <input class="form-control @error('last_name') is-invalid @enderror" type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" placeholder="User last name">
                                    @error('last_name')
                                        <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-control-label">Email</label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" value="{{ old('email') }}" placeholder="User email">
                                    @error('email')
                                        <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="example-text-input" class="form-control-label">Role</label>
                                    <div>
                                        @foreach($roles as $id => $role)
                                            <div class="form-check form-check-inline">
                                                <label class="custom-control-label" for="{{ $id }}">{{ $role }}</label>
                                                <input class="form-check-input" type="radio" name="role" id="{{ $id }}" value="{{ $id }}" @checked($id == old('role'))>
                                            </div>
                                        @endforeach
                                    </div>
                                    @error('role')
                                        <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="password" class="form-control-label">Password</label>
                                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" id="password" value="{{ old('password') }}" placeholder="Create user password">
                                    @error('password')
                                        <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="password_confirmation" class="form-control-label">Password Confirm</label>
                                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm password">
                                    @error('password')
                                        <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="card card-plain">
                                        <div class="position-relative">
                                            <img src="{{ asset('assets/images/image-not-found.svg') }}" class="shadow border-radius-lg w-sm-50" id="photo-preview" alt="User photo" title="User photo">
                                        </div>
                                        <div class="card-body px-1 pt-3">
                                            <label class="form-label" for="photo">Photo</label>
                                            <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" id="photo" accept="image/*">
                                            @error('photo')
                                            <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                            @enderror
                                        </div>
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

@pushonce('scripts')
    <script src="{{ asset('assets/js/plugins/photo-preview.js') }}"></script>
@endpushonce

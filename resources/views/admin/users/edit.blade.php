@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        @include('admin.components.content-header', [
            'title' => 'Edit',
            'breadcrumbs' => [
                ['title' => 'Users', 'route' => route('admin.user.index')],
                ['title' => $user->name, 'route' => route('admin.user.show', $user)],
                ['title' => 'Edit']
            ]
        ])

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <form action="{{ route('admin.user.update', $user) }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="input-group col-12 col-md-6 col-xl-4 mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><strong>Name</strong></span>
                        </div>
                        <input type="text" name="name" value="{{ old('name', $user->name) }}"
                               class="form-control @error('name') is-invalid @enderror" placeholder="User name">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-group col-12 col-md-6 col-xl-4 mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><strong>Email</strong></span>
                        </div>
                        <input type="text" name="email" value="{{ old('email', $user->email) }}"
                               class="form-control @error('email') is-invalid @enderror" placeholder="User email">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group d-flex align-items-center">
                        <strong class="mr-3">Role</strong>
                        @foreach($roles as $id => $role)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="role" id="{{ $id }}"
                                       value="{{ $id }}" @checked($id == old('role', $user->role))>
                                <label class="form-check-label" for="{{ $id }}">{{ $role }}</label>
                            </div>
                        @endforeach
                        @error('role')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div><!-- /.container-fluid -->
        </section><!-- /.content -->
    </div>
@endsection

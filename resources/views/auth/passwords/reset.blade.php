@extends('layouts.main')

@section('content')
    <div class="login-box-layout1">
        <div class="section-heading heading-dark">
            <h2 class="item-heading">Reset password</h2>
        </div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form class="login-form" method="post" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="row">
                <div class="col-md-6">
                    <label class="mb-2" for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email', $email) }}" class="input main-input-box @error('email') is-invalid @enderror"
                           placeholder="Enter your email address" autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback d-inline-flex" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label class="mb-2" for="password">Password</label>
                    <input type="password" name="password" id="password" class="input main-input-box @error('password') is-invalid @enderror"
                           placeholder="Create new password" autocomplete="new-password" autofocus>
                    @error('password')
                    <span class="invalid-feedback d-inline-flex" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="mb-2" for="password-confirm">Password Confirm</label>
                    <input type="password" name="password_confirmation" id="password-confirm" class="input main-input-box"
                           placeholder="Confirm your password" autocomplete="new-password">
                </div>
            </div>
            <div class="btn-area">
                <button type="submit" class="btn-fill btn-primary">Reset password</button>
                <a class="btn-fill btn-dark" href="{{ route('login') }}" title="Sign In">Sign In</a>
            </div>
        </form>
    </div>
@endsection

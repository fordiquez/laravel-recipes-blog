@extends('layouts.main')

@section('content')
    <div class="wrapper login-box-layout1">
        <form class="login-form" method="post" action="{{ route('register') }}">
            @csrf
            <h3>Registration</h3>

            <div class="row">
                <div class="col-md-6">
                    <label class="mb-2" for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="input main-input-box" value="{{ old('first_name') }}">
                    @error('first_name')
                    <span class="invalid-feedback d-inline-flex" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="mb-2" for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="input main-input-box" value="{{ old('last_name') }}">
                    @error('last_name')
                    <span class="invalid-feedback d-inline-flex" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label class="mb-2" for="email">Email</label>
                    <input type="email" name="email" id="email" class="input main-input-box" value="{{ old('email') }}">
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
                    <input type="password" name="password" id="password" class="input main-input-box" autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback d-inline-flex" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="mb-2" for="password-confirm">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password-confirm" class="input main-input-box">
                </div>
            </div>

            <div class="btn-area">
                <button type="submit" class="btn-fill btn-primary button">Sign Up</button>
                <a class="btn-fill btn-dark" href="{{ route('login') }}">Sign In</a>
            </div>
        </form>
    </div>
@endsection

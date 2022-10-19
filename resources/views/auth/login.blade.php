@extends('layouts.main')

@section('content')
    <div class="login-box-layout1">
        <div class="section-heading heading-dark">
            <h2 class="item-heading">Login Form</h2>
        </div>
        <form class="login-form" method="post" action="{{ route('login') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label class="mb-2" for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="input main-input-box @error('email') is-invalid @enderror"
                           placeholder="Enter your email address" autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback d-inline-flex" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="mb-2" for="password">Password</label>
                    <input type="password" name="password" id="password" class="input main-input-box" placeholder="Enter your password" autocomplete="password">
                    @error('password')
                    <span class="invalid-feedback d-inline-flex" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="checkbox checkbox-primary">
                        <input type="checkbox" id="remember" name="remember" @checked(old('remember'))>
                        <label for="remember" class="user-select-none">Remember Me</label>
                    </div>
                </div>
                @if(Route::has('password.request'))
                    <div class="col-md-6">
                        <label class="lost-password">
                            <a href="{{ route('password.request') }}" title="Password restore">Forgot your password?</a>
                        </label>
                    </div>
                @endif
            </div>
            <div class="btn-area">
                <button type="submit" class="btn-fill btn-primary">Sign In</button>
                <a class="btn-fill btn-dark" href="{{ route('register') }}">Sign Up</a>
            </div>
        </form>
    </div>
@endsection

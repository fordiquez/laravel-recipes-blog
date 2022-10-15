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
        <form class="login-form" method="post" action="{{ route('password.email') }}">
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
            </div>
            <div class="btn-area">
                <button type="submit" class="btn-fill btn-primary">Send password reset link</button>
                <a class="btn-fill btn-dark" href="{{ route('login') }}" title="Sign In">Sign In</a>
            </div>
        </form>
    </div>
@endsection

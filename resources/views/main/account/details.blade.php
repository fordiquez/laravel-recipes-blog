@extends('layouts.main')

@section('breadcrumb')
    <x-main.breadcrumb title="Account Details"></x-main.breadcrumb>
@endsection

@section('content')
    <section class="my-account-wrap">
        <div class="container">
            <div class="row">
                <x-main.account-nav></x-main.account-nav>
                <div class="col-lg-8 col-12">
                    <div class="my-account-content tab-content">
                        <div class="account-details listing-form box-padding">
                            <form class="account-form" action="{{ route('main.account.update', $user) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="inner-box">
                                    <h3>Account Information</h3>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="first_name">First Name</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', $user->first_name) }}" placeholder="Enter your first name">
                                            </div>
                                            @error('first_name')
                                                <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="last_name">Last Name</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', $user->last_name) }}" placeholder="Enter your last name">
                                            </div>
                                            @error('last_name')
                                                <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="email">Email</label>
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" placeholder="Enter your email address">
                                            </div>
                                            @error('email')
                                                <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="password_current">Current password</label>
                                            <div class="form-group">
                                                <input type="password" class="form-control" id="password_current" name="password_current" value="**********" disabled>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="password">New password</label>
                                            <div class="form-group">
                                                <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" placeholder="Enter your new password">
                                            </div>
                                            @error('password')
                                                <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="password_confirmation">Password confirm</label>
                                            <div class="form-group">
                                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm your new password">
                                            </div>
                                            @error('password_confirmation')
                                                <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="photo">Profile photo</label>
                                            <div class="form-group">
                                                <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                                            </div>
                                            @error('photo')
                                                <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <ul class="user-edit meta-item">
                                    <li class="item-btn">
                                        <button class="btn-fill account-update">Edit &amp; Save</button>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

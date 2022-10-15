@extends('layouts.main')

@section('content')
    <div class="col-lg-12">
        <div class="error-content-box">
            <div class="error-figure-wrap">
                <img src="{{ asset('assets/main/images/404.png') }}" alt="404" title="404" class="img-fluid">
                <div class="error-center-figure">
                    <img src="{{ asset('assets/main/images/404-middle.png') }}" alt="404" title="404" class="img-fluid">
                </div>
            </div>
            <h2 class="item-title">Sorry! Page Was Not Found</h2>
            <p class="item-details">
                The page you are looking is not available or has been removed.
                Try going to Home Page by using the button below.
            </p>
            <a href="{{ route('main.index') }}" class="item-btn">GO TO HOME PAGE</a>
        </div>
    </div>
@endsection

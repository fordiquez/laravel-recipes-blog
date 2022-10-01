<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <title>@yield('title', 'Admin Dashboard')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/fbdc158b21.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <!-- CSS only -->
    <link href="{{ asset('assets/css/argon-dashboard.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.3/css/OverlayScrollbars.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.3/js/OverlayScrollbars.js"></script>
    @stack('styles')
</head>
<body class="g-sidenav-show bg-gray-100">
<div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
</div>
@component('admin.components.sidenav')
    @slot('route')
        {{ \Illuminate\Support\Facades\Route::getCurrentRoute()->getName() }}
    @endslot
@endcomponent
<main class="main-content position-relative border-radius-lg">
    <!-- Navbar -->
    @include('admin.components.navbar')
    <!-- End Navbar -->
    @yield('content')
    <footer class="footer p-3">
        <div class="container-fluid">
            <div class="row mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted">
                    <span>© {{ date('Y') }}, made with <i class="fa fa-heart"></i> by </span>
                    <a href="https://github.com/fordiquez" class="font-weight-bold" target="_blank">Ruslan Tsiapko</a>
                    <span>for a better web.</span>
                </div>
            </div>
        </div>
    </footer>
</main>
@include('admin.components.fixed-plugin')
<!-- Core JS Files -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/smooth-scrollbar.min.js') }}"></script>
<script>
    const win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        const options = {
            damping: '0.5'
        };
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    document.addEventListener("DOMContentLoaded", function() {
        //The first argument are the elements to which the plugin shall be initialized
        //The second argument has to be at least a empty object or a object with your desired options
        OverlayScrollbars(document.querySelectorAll("body"), { });
    });
</script>
<!-- GitHub buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('assets/js/argon-dashboard.min.js') }}"></script>
@stack('scripts')
</body>

</html>

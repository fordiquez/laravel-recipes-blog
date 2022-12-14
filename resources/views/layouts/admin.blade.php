<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icons -->
    <link rel="icon" type="image/png" href="{{ asset('assets/icons/favicon-admin.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/icons/favicon-apple.png') }}">

    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" />
    <!-- Vite styles -->
    @vite(['resources/css/overlay-scrollbars.css', 'resources/sass/font-awesome.scss'])
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/argon-dashboard.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
    <!-- Custom styles -->
    @stack('styles')
</head>
<body class="g-sidenav-show bg-gray-100">
<div class="position-absolute w-100 min-height-300 top-0" style="background-image: url({{ url('assets/images/bg.jpg') }}); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
</div>
@include('components.admin.sidenav')
<main class="main-content position-relative border-radius-lg">
    <!-- Navbar -->
    @include('components.admin.navbar')
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
@include('components.admin.fixed-plugin')
<!-- Vite scripts -->
@vite(['resources/js/app.js', 'resources/js/overlay-scrollbars.js'])
<!-- Core Scripts -->
<script src="{{ asset('assets/js/jquery-3.6.1.js') }}"></script>
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
        // The first argument are the elements to which the plugin shall be initialized
        // The second argument has to be at least an empty object or an object with your desired options
        OverlayScrollbars(document.querySelectorAll("body"), { });
    });
</script>
<!-- Scripts -->
<script src="{{ asset('assets/js/argon-dashboard.min.js') }}"></script>
<!-- Custom scripts -->
@stack('scripts')
</body>
</html>

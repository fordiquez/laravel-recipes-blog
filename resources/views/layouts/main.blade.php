<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Icons -->
    <script src="{{ asset('assets/js/font-awesome.js') }}"></script>
    <link rel="icon" sizes="32x32" href="{{ asset('assets/icons/favicon.png') }}">
    <link rel="icon" sizes="192x192" href="{{ asset('assets/icons/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/icons/favicon.png') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/source-sans-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/oxygen.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/roboto-x-roboto-slab.css') }}">

    <!-- Vite styles -->
    @vite(['resources/sass/app.scss'])
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/recipe-rating.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/elementor/custom-frontend-legacy.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/elementor/custom-frontend.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/elementor/elementor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dynamic-inline.css') }}">
    <!-- Custom styles -->
    @stack('styles')
</head>
<body class="home page header-style-2 no-banner no-sidebar right-sidebar">
{{--<div id="preloader" style="background-image: url({{ asset('assets/main/images/preloader.gif') }})"></div>--}}
<div id="page" class="site">
    <x-main.header :$cuisines :$categories></x-main.header>
    <div id="content" class="site-content">
        @yield('breadcrumb')
        <div id="primary" class="content-area">
            <div class="container">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-area">
            <div class="footer-top-area">
                <div class="container">
                    <div class="row gutters-60">
                        <div class="col-12 col-sm-4">
                            <div class="widget rt_footer_social_widget">
                                <h3>About Company</h3>
                                <div class="rt-about-widget">
                                    <div class="footer-about">
                                        <span>You can find all of the recipes on our site. This is the best Recipe WordPress Theme.</span>
                                    </div>
                                    <ul class="footer-social">
                                        <li class="facebook">
                                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                        <li class="youtube">
                                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                                        </li>
                                        <li class="vimeo">
                                            <a href="#" target="_blank"><i class="fab fa-vimeo-v"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="widget widget_nav_menu">
                                <h3 class="widgettitle">Useful Link</h3>
                                <div class="menu-top-bar-container">
                                    <ul id="menu-top-bar" class="menu">
                                        <li class="menu-item">
                                            <a href="{{ route('main.index') }}">Home</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('main.cuisines.index') }}">Cuisines</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('main.categories.index') }}">Categories</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('main.recipes.index') }}">Recipes</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href={{ route('main.posts.index') }}>Posts</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="widget">
                                <h3 class="widgettitle">Newsletter</h3>
                                <form class="mc4wp-form" method="post">
                                    <div class="widget-newsletter-subscribe">
                                        <div class="original">
                                            <p>Newsletter Subscribe</p>
                                            <div class="form-group">
                                                <input type="email" placeholder="Your e-mail address" class="form-control" name="email" required="">
                                            </div>
                                            <div class="form-group mb-none">
                                                <button type="submit" class="item-btn text-uppercase">Subscribe</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="copyright">?? 2022 Ranna. All Rights Reserved.</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<a href="" class="scrollToTop"><i class="fa fa-arrow-up"></i></a>
<!-- Vite scripts -->
@vite(['resources/js/app.js'])
<!-- Scripts -->
{{--<script src="{{ asset('assets/main/js/jquery.min.js') }}"></script>--}}
<script src="{{ asset('assets/js/jquery-3.6.1.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/elementor/webpack.runtime.min.js') }}"></script>
<script src="{{ asset('assets/js/elementor/frontend-modules.min.js') }}"></script>
<script type="text/javascript">
    const elementorFrontendConfig = {
        "environmentMode": {"edit": false, "wpPreview": false, "isScriptDebug": false},
        "breakpoints": {"xs": 0, "sm": 480, "md": 768, "lg": 991, "xl": 1440, "xxl": 1600},
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Extra",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet",
                    "value": 990,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Extra",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.7.3",
        "experimentalFeatures": {
            "e_import_export": true,
            "e_hidden_wordpress_widgets": true,
            "landing-pages": true,
            "elements-color-picker": true,
            "favorite-widgets": true,
            "admin-top-bar": true
        },
        "urls": {"assets": ''},
        "settings": {"page": [], "editorPreferences": []},
        "kit": {
            "global_image_lightbox": "yes",
            "viewport_tablet": 990,
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        }
    };
</script>
<script src="{{ asset('assets/js/elementor/frontend.min.js') }}"></script>
<!-- Custom scripts -->
@stack('scripts')
</body>
</html>

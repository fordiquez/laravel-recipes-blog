<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Icons -->
    <script src="{{ asset('assets/main/js/font-awesome.js') }}"></script>
    <link rel="icon" sizes="32x32" href="{{ asset('assets/main/icons/favicon.png') }}">
    <link rel="icon" sizes="192x192" href="{{ asset('assets/main/icons/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/main/icons/favicon.png') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/main/fonts/source-sans-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main/fonts/oxygen.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main/fonts/roboto-x-roboto-slab.css') }}">

    <!-- Vite styles -->
    @vite(['resources/sass/app.scss'])
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/main/css/recipe-rating.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main/css/elementor/custom-frontend-legacy.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main/css/elementor/custom-frontend.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main/css/elementor/elementor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main/css/dynamic-inline.css') }}">
    <!-- Custom styles -->
    @stack('styles')
</head>
<body class="home page header-style-2 no-banner no-sidebar right-sidebar">
<div id="preloader" style="background-image: url({{ asset('assets/main/images/preloader.gif') }})"></div>
<div id="page" class="site">
    <header class="site-header">
        <div id="header-2" class="header-area header-fixed">
            <div class="masthead-container header-controll">
                <div class="container">
                    <div class="row gutters-10 d-flex justify-content-between align-items-center">

                        <div class="col-lg-3 d-flex justify-content-center">
                            <div class="site-branding">
                                <a class="dark-logo" href="{{ route('main.index') }}">
                                    <img src="{{ asset('assets/main/images/logo-dark.png') }}" alt="{{ config('app.name') }}" title="{{ config('app.name') }}">
                                </a>
                                <a class="light-logo" href="{{ route('main.index') }}">
                                    <img src="{{ asset('assets/main/images/logo-light.png') }}" alt="{{ config('app.name') }}" title="{{ config('app.name') }}">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div id="site-navigation" class="main-navigation">
                                <nav class="menu-main-menu-container">
                                    <ul id="menu-main-menu" class="menu">
                                        <li class="menu-item current-menu-item">
                                            <a href="{{ route('main.index') }}" aria-current="page">Home</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('main.cuisines.index') }}">Cuisines</a>
                                            <ul class="sub-menu">
                                                @foreach($cuisines as $cuisine)
                                                    <li class="menu-item">
                                                        <a href="{{ route('main.recipes.index', ['cuisine_id' => [0 => $cuisine->id]]) }}">
                                                            <span>{{ $cuisine->title }}</span>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="{{ route('main.recipes.index') }}">Recipes</a>
                                            <ul class="sub-menu">
                                                @foreach($categories as $category)
                                                    <li @class(['menu-item', 'menu-item-has-children' => count($category->subcategories)])>
                                                        <a href="{{ route('main.recipes.index', ['category_id' => [0 => $category->id]]) }}">{{ $category->title }}</a>
                                                        @if(count($category->subcategories))
                                                            <ul class="sub-menu">
                                                                @foreach($category->subcategories as $subcategory)
                                                                    <li class="menu-item">
                                                                        <a href="{{ route('main.recipes.index', ['category_id' => [0 => $subcategory->id]]) }}">{{ $subcategory->title }}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('main.posts.index') }}">Posts</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-center nav-action-elements-layout">
                            <ul>
                                @guest
                                    <li>
                                        <a href="{{ route('login') }}" class="login-btn">
                                            <i class="fa-solid fa-right-to-bracket"></i>
                                            <span>Login</span>
                                        </a>
                                    </li>
                                @endguest
                                @auth
                                    <li>
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button class="logout-btn bg-transparent">
                                                <i class="fa-solid fa-right-from-bracket"></i>
                                                <span>Logout</span>
                                            </button>
                                        </form>
                                    </li>
                                @endauth
                                <li>
                                    <a href="submit" class="fill-btn">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        <span>Submit Recipe</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="rt-header-menu mean-container" id="meanmenu">
        <div class="mean-bar">
            <a class="dark-logo" href="{{ route('main.index') }}">
                <img src="{{ asset('assets/main/images/logo-dark.png') }}" alt="{{ config('app.name') }}"
                     title="{{ config('app.name') }}" class="logo-small" height="58">
            </a>
            <a class="header-submit-icon-mobile"
               href="https://radiustheme.com/demo/wordpress/themes/ranna/submit-recipe"><span>Add Recipe</span></a>
            <a class="header-login-icon header-login-icon-mobile"
               href="https://radiustheme.com/demo/wordpress/themes/ranna/login-page">
                <i class="fa fa-user-o" aria-hidden="true"></i>
            </a>
            <span class="sidebarBtn">
            <span class="fa fa-bars"></span>
        </span>
        </div>

        <div class="rt-slide-nav">
            <div class="offscreen-navigation">
                <nav class="menu-main-menu-container">
                    <ul id="menu-main-menu" class="menu">
                        <li class="menu-item current-menu-item">
                            <a href="{{ route('main.index') }}" aria-current="page">Home</a>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="{{ route('main.cuisines.index') }}">Cuisines</a>
                            <ul class="sub-menu">
                                @foreach($cuisines as $cuisine)
                                    <li class="menu-item">
                                        <a href="{{ route('main.recipes.index', ['cuisine_id' => [0 => $cuisine->id]]) }}">
                                            <span>{{ $cuisine->title }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="{{ route('main.recipes.index') }}">Recipes</a>
                            <ul class="sub-menu">
                                @foreach($categories as $category)
                                    <li @class(['menu-item', 'menu-item-has-children' => count($category->subcategories)])>
                                        <a href="{{ route('main.recipes.index', ['category_id' => [0 => $category->id]]) }}">
                                            {{ $category->title }}
                                        </a>
                                        @if(count($category->subcategories))
                                            <ul class="sub-menu">
                                                @foreach($category->subcategories as $subcategory)
                                                    <li class="menu-item">
                                                        <a href="{{ route('main.recipes.index', ['category_id' => [0 => $subcategory->id]]) }}">
                                                            {{ $subcategory->title }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('main.posts.index') }}">Posts</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div id="content" class="site-content">
        <x-main.breadcrumb></x-main.breadcrumb>
        <div id="primary" class="content-area">
            <div class="container">
                <div class="row gutters-60">
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
                        <div class="copyright">© 2022 Ranna. All Rights Reserved.</div>
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
<script src="{{ asset('assets/main/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/main/js/main.js') }}"></script>
<script src="{{ asset('assets/main/js/elementor/webpack.runtime.min.js') }}"></script>
<script src="{{ asset('assets/main/js/elementor/frontend-modules.min.js') }}"></script>
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
<script src="{{ asset('assets/main/js/elementor/frontend.min.js') }}"></script>
<!-- Custom scripts -->
@stack('scripts')
</body>
</html>

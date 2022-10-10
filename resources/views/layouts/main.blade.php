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
    @vite(['resources/sass/app.scss', 'resources/sass/mdb.scss'])
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
<body class="home page-template page theme-ranna header-style-2 footer-style-1 no-banner no-sidebar right-sidebar">
<div id="preloader" style="background-image: url({{ asset('assets/main/images/preloader.gif') }})"></div>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
    <header class="site-header">
        <div id="header-2" class="header-area header-fixed">
            <div class="masthead-container header-controll">
                <div class="container">
                    <div class="row gutters-10 d-flex justify-content-between align-items-center">

                        <div class="col-lg-3 d-flex justify-content-center">
                            <div class="site-branding">
                                <a class="dark-logo" href="{{ route('main.index') }}">
                                    <img src="{{ asset('assets/main/images/logo-dark.png') }}" alt="{{ config('app.name') }}" title="{{ config('app.name') }}" width="199" height="58">
                                </a>
                                <a class="light-logo" href="{{ route('main.index') }}">
                                    <img src="{{ asset('assets/main/images/logo-light.png') }}" alt="{{ config('app.name') }}" title="{{ config('app.name') }}" width="199" height="58">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div id="site-navigation" class="main-navigation">
                                <nav class="menu-main-menu-container">
                                    <ul id="menu-main-menu" class="menu">
                                        <li class="menu-item current-menu-item">
                                            <a href="{{ route('main.index') }}" aria-current="page">Home</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="cuisines.index">Cuisines</a>
                                            <ul class="sub-menu">
                                                @foreach($cuisines as $cuisine)
                                                    <li class="menu-item">
                                                        <a href="{{ route('admin.cuisines.show', $cuisine) }}">
                                                            <span>{{ $cuisine->title }}</span>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="recipes.index">Recipes</a>
                                            <ul class="sub-menu">
                                                @foreach($categories as $category)
                                                    <li @class(['menu-item', 'menu-item-has-children' => count($category->subcategories)])>
                                                        <a href="{{ route('admin.categories.show', $category) }}">{{ $category->title }}</a>
                                                        @if(count($category->subcategories))
                                                            <ul class="sub-menu">
                                                                @foreach($category->subcategories as $subcategory)
                                                                    <li class="menu-item">
                                                                        <a href="{{ route('admin.categories.show', $subcategory) }}">{{ $subcategory->title }}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="#">Advices</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 d-flex justify-content-center nav-action-elements-layout">
                            <ul>
                                <li>
                                    <a href="{{ route('login') }}" class="login-btn">Login</a>
                                </li>
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
                <img src="{{ asset('assets/main/images/logo-dark.png') }}" alt="{{ config('app.name') }}" title="{{ config('app.name') }}" class="logo-small" height="58">
            </a>
            <a class="header-submit-icon-mobile" href="https://radiustheme.com/demo/wordpress/themes/ranna/submit-recipe"><span>Add Recipe</span></a>
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
                            <a href="cuisines.index">Cuisines</a>
                            <ul class="sub-menu">
                                @foreach($cuisines as $cuisine)
                                    <li class="menu-item">
                                        <a href="{{ route('admin.cuisines.show', $cuisine) }}">
                                            <span>{{ $cuisine->title }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="recipes.index">Recipes</a>
                            <ul class="sub-menu">
                                @foreach($categories as $category)
                                    <li @class(['menu-item', 'menu-item-has-children' => count($category->subcategories)])>
                                        <a href="">{{ $category->title }}</a>
                                        @if(count($category->subcategories))
                                            <ul class="sub-menu">
                                                @foreach($category->subcategories as $subcategory)
                                                    <li class="menu-item">
                                                        <a href="">
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
                        <li class="menu-item"><a href="#">Advices</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div id="header-area-space"></div>
    <div id="header-search" class="header-search">
        <button type="button" class="close">×</button>

        <form role="search" method="get" class="search-form"
              action="https://radiustheme.com/demo/wordpress/themes/ranna/">
            <div class="row custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="search-query form-control" placeholder="Search here ..." value=""
                           name="s"/>
                    <span class="input-group-btn">
					<button class="btn" type="submit">
						<i class="fa fa-search" aria-hidden="true"></i>
					</button>
				</span>
                </div>
            </div>
        </form>
    </div>

    <div id="content" class="site-content">
        @yield('content')
    </div>

    <footer>
        <div id="footer-1" class="footer-area">
            <div class="footer-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12">
                            <div id="media_image-2" class="widget widget_media_image"><a
                                    href="https://radiustheme.com/demo/wordpress/themes/ranna/"><img width="199"
                                                                                                     height="58"
                                                                                                     src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/07/logo-light.png"
                                                                                                     class="image wp-image-172  attachment-full size-full"
                                                                                                     alt=""
                                                                                                     loading="lazy"
                                                                                                     style="max-width: 100%; height: auto;"/></a>
                            </div>
                            <div id="apsc_widget-2" class="widget widget_apsc_widget">
                                <div class="apsc-icons-wrapper clearfix apsc-theme-4 ">
                                    <div class="apsc-each-profile">
                                        <a class="apsc-facebook-icon clearfix" href="https://facebook.com/"
                                           target="_blank">
                                            <div class="apsc-inner-block">
                                                <span class="social-icon"><i
                                                        class="fab fa-facebook-f apsc-facebook"></i><span
                                                        class="media-name">Facebook</span></span>
                                                <span class="apsc-count">0</span><span
                                                    class="apsc-media-type">Fans</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="apsc-each-profile">
                                        <a class="apsc-twitter-icon clearfix" href="https://twitter.com/"
                                           target="_blank">
                                            <div class="apsc-inner-block">
                                                <span class="social-icon"><i
                                                        class="fab fa-twitter apsc-twitter"></i><span
                                                        class="media-name">Twitter</span></span>
                                                <span class="apsc-count">0</span><span
                                                    class="apsc-media-type">Followers</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="apsc-each-profile">
                                        <a class="apsc-instagram-icon clearfix" href="https://instagram.com/"
                                           target="_blank">
                                            <div class="apsc-inner-block">
                                                <span class="social-icon"><i
                                                        class="apsc-instagram fab fa-instagram"></i><span
                                                        class="media-name">Instagram</span></span>
                                                <span class="apsc-count">0</span><span
                                                    class="apsc-media-type">Followers</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="apsc-each-profile">
                                        <a class="apsc-youtube-icon clearfix" href="" target="_blank">
                                            <div class="apsc-inner-block">
                                                <span class="social-icon"><i
                                                        class="apsc-youtube fab fa-youtube"></i><span
                                                        class="media-name">Youtube</span></span>
                                                <span class="apsc-count">0</span><span class="apsc-media-type">Subscriber</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="apsc-each-profile">
                                        <a class="apsc-soundcloud-icon clearfix" href="https://soundcloud.com/"
                                           target="_blank">
                                            <div class="apsc-inner-block">
                                                <span class="social-icon"><i
                                                        class="apsc-soundcloud fab fa-soundcloud"></i><span
                                                        class="media-name">Soundcloud</span></span>
                                                <span class="apsc-count"></span><span
                                                    class="apsc-media-type">Followers</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="apsc-each-profile">

                                        <a class="apsc-dribble-icon clearfix" href="https://dribbble.com/"
                                           target="_blank">
                                            <div class="apsc-inner-block">
                                                <span class="social-icon"><i
                                                        class="apsc-dribbble fab fa-dribbble"></i><span
                                                        class="media-name">dribble</span></span>
                                                <span class="apsc-count"></span><span
                                                    class="apsc-media-type">Followers</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="copyright">&copy; 2020 Ranna. All Rights Reserved.</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<a href="" class="scrollToTop"><i class="fa fa-arrow-up"></i></a>
<!-- Vite scripts -->
@vite(['resources/js/app.js', 'resources/js/mdb.js'])
<!-- Scripts -->
<script src="{{ asset('assets/main/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/main/js/main.js') }}"></script>
<script src="{{ asset('assets/main/js/elementor/webpack.runtime.min.js') }}"></script>
<script src="{{ asset('assets/main/js/elementor/frontend-modules.min.js') }}"></script>
<script type="text/javascript">
    const elementorFrontendConfig = {
        "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false },
        "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 991, "xl": 1440, "xxl": 1600 },
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
        "urls": { "assets": '' },
        "settings": { "page": [], "editorPreferences": [] },
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

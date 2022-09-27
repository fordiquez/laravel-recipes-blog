<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
    <!-- Normalize Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Modernizr Js -->
    <script src="{{ asset('assets/js/modernizr-3.6.0.min.js') }}"></script>
    @stack('styles')
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a
    href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<!-- ScrollUp Start Here -->
<a href="#wrapper" data-type="section-switch" class="scrollup">
    <i class="fas fa-angle-double-up"></i>
</a>
<!-- ScrollUp End Here -->
<div id="wrapper" class="wrapper">
    <!-- Header Area Start Here -->
    <header class="header-two">
        <div id="header-main-menu" class="header-main-menu header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-9 col-sm-8 col-8">
                        <div class="site-logo-desktop">
                            <a href="{{ route('main.index') }}" class="main-logo">
                                <img src="{{ asset('assets/img/logo-dark.png') }}" alt="Site Logo" title="Site Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-3 col-sm-4 col-4 possition-static">
                        <div class="site-logo-mobile">
                            <a href="index.html" class="sticky-logo-light"><img src="img/logo-dark.png" alt="Site Logo"></a>
                            <a href="index.html" class="sticky-logo-dark"><img src="img/logo-dark.png" alt="Site Logo"></a>
                        </div>
                        <nav class="site-nav">
                            <ul id="site-menu" class="site-menu">
                                <li><a href="#">Home</a>
                                    <ul class="dropdown-menu-col-1">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index2.html">Home 2</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="category.html">Category</a>
                                </li>
                                <li>
                                    <a href="#">Recipes</a>
                                    <ul class="dropdown-menu-col-1">
                                        <li>
                                            <a href="recipe-with-sidebar.html">Recipes With Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="recipe-without-sidebar.html">Recipes Without Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="single-recipe1.html">Single Recipe 1</a>
                                        </li>
                                        <li>
                                            <a href="single-recipe2.html">Single Recipe 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="possition-static hide-on-mobile-menu">
                                    <a href="#">Pages</a>
                                    <div class="template-mega-menu">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="menu-ctg-title">Home</div>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="index.html">
                                                                <i class="fas fa-home"></i>Home 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="index2.html">
                                                                <i class="fas fa-home"></i>Home 2</a>
                                                        </li>
                                                    </ul>
                                                    <div class="menu-ctg-title">Recipes</div>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="recipe-with-sidebar.html"><i class="fas fa-utensils"></i>Recipes
                                                                With Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="recipe-without-sidebar.html"><i class="fas fa-utensils"></i>Recipes
                                                                Without
                                                                Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-4">
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="single-recipe1.html"><i class="fas fa-utensils"></i>Single
                                                                Recipe 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-recipe2.html"><i class="fas fa-utensils"></i>Single
                                                                Recipe 2</a>
                                                        </li>
                                                    </ul>
                                                    <div class="menu-ctg-title">Other Pages</div>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="about.html"><i class="fab fa-cloudversify"></i>About</a>
                                                        </li>
                                                        <li>
                                                            <a href="author.html"><i class="fas fa-user"></i>Author</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-author.html"><i class="fas fa-user"></i>Author
                                                                Details</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-4">
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="submit-recipe.html"><i class="far fa-share-square"></i>Submit
                                                                Recipe</a>
                                                        </li>
                                                        <li>
                                                            <a href="login.html"><i class="fas fa-lock"></i>Login</a>
                                                        </li>
                                                        <li>
                                                            <a href="404.html"><i class="fas fa-exclamation-triangle"></i>404
                                                                Error</a>
                                                        </li>
                                                    </ul>
                                                    <div class="menu-ctg-title">Shop</div>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="shop.html"><i class="fas fa-shopping-cart"></i>Shop</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-shop.html"><i class="fas fa-shopping-cart"></i>Shop
                                                                Details</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="hide-on-desktop-menu">
                                    <a href="#">Pages</a>
                                    <ul class="dropdown-menu-col-1">
                                        <li>
                                            <a href="about.html">About</a>
                                        </li>
                                        <li>
                                            <a href="author.html">Author</a>
                                        </li>
                                        <li>
                                            <a href="single-author.html">Author Details</a>
                                        </li>
                                        <li>
                                            <a href="submit-recipe.html">Submit Recipe</a>
                                        </li>
                                        <li>
                                            <a href="login.html">Login</a>
                                        </li>
                                        <li>
                                            <a href="login.html">404 Error</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Blog</a>
                                    <ul class="dropdown-menu-col-1">
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-list.html">Blog List</a></li>
                                        <li><a href="single-blog.html">Blog Details</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-9 col-sm-8 col-8 d-flex align-items-center justify-content-end">
                        <div class="nav-action-elements-layout1">
                            <ul>
                                <li>
                                    <div class="cart-wrap cart-on-mobile d-lg-none">
                                        <div class="cart-info">
                                            <i class="flaticon-shopping-bag"></i>
                                            <div class="cart-amount"><span class="item-currency">$</span>00</div>
                                        </div>
                                        <div class="cart-items">
                                            <div class="cart-item">
                                                <div class="cart-img">
                                                    <a href="#">
                                                        <img src="img/product/top-product1.jpg" alt="product" class="img-fluid">
                                                    </a>
                                                </div>
                                                <div class="cart-title">
                                                    <a href="#">Pressure</a>
                                                    <span>Code: STPT601</span>
                                                </div>
                                                <div class="cart-quantity">X 1</div>
                                                <div class="cart-price">$249</div>
                                                <div class="cart-trash">
                                                    <a href="#">
                                                        <i class="far fa-trash-alt"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="cart-item">
                                                <div class="cart-img">
                                                    <a href="#">
                                                        <img src="img/product/top-product2.jpg" alt="product" class="img-fluid">
                                                    </a>
                                                </div>
                                                <div class="cart-title">
                                                    <a href="#">Stethoscope</a>
                                                    <span>Code: STPT602</span>
                                                </div>
                                                <div class="cart-quantity">X 1</div>
                                                <div class="cart-price">$189</div>
                                                <div class="cart-trash">
                                                    <a href="#">
                                                        <i class="far fa-trash-alt"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="cart-item">
                                                <div class="cart-img">
                                                    <a href="#">
                                                        <img src="img/product/top-product3.jpg" alt="product" class="img-fluid">
                                                    </a>
                                                </div>
                                                <div class="cart-title">
                                                    <a href="#">Microscope</a>
                                                    <span>Code: STPT603</span>
                                                </div>
                                                <div class="cart-quantity">X 2</div>
                                                <div class="cart-price">$379</div>
                                                <div class="cart-trash">
                                                    <a href="#">
                                                        <i class="far fa-trash-alt"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="cart-item">
                                                <div class="cart-btn">
                                                    <a href="#" class="item-btn">View Cart</a>
                                                    <a href="#" class="item-btn">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <button type="button" class="login-btn" data-toggle="modal" data-target="#myModal">
                                        <i class="flaticon-profile"></i>Login
                                    </button>
                                </li>
                                <li>
                                    <a href="submit-recipe.html" class="fill-btn"><i class="flaticon-plus-1"></i>SUBMIT
                                        RECIPE</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mob-menu-open toggle-menu">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End Here -->
    <main style="margin-top: 65px">
        @yield('content')
    </main>
    <!-- Footer Area Start Here -->
    <footer class="ranna-bg-dark">
        <div class="container">
            <div class="footer-logo">
                <a href="index.html"><img src="{{ asset('assets/img/logo-light.png') }}" class="img-fluid"
                                          alt="footer-logo"></a>
            </div>
            <div class="footer-menu">
                <ul>
                    <li><a href="#">FACEBOOK</a></li>
                    <li><a href="#">TWITTER</a></li>
                    <li><a href="#">INSTAGRAM</a></li>
                    <li><a href="#">PINTEREST</a></li>
                    <li><a href="#">GOOGLEPLUS</a></li>
                    <li><a href="#">YOUTUBE</a></li>
                </ul>
            </div>
            <div class="copyright">@ fordiquez — 2022</div>
        </div>
    </footer>
    <!-- Footer Area End Here -->
</div>
<!-- Search Box Start Here -->
<div id="search" class="search-wrap">
    <button type="button" class="close">×</button>
    <form class="search-form">
        <input type="search" id="ooooo" value="" placeholder="Type here........"/>
        <button type="submit" class="search-btn"><i class="flaticon-search"></i></button>
    </form>
</div>
<!-- Search Box End Here -->
<!-- Modal Start-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="title-default-bold mb-none">Login</div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="login-form">
                    <input class="main-input-box" type="text" placeholder="User Name"/>
                    <input class="main-input-box" type="password" placeholder="Password"/>
                    <div class="inline-box mb-5 mt-4">
                        <div class="checkbox checkbox-primary">
                            <input id="modal-checkbox" type="checkbox">
                            <label for="modal-checkbox">Remember Me</label>
                        </div>
                        <label class="lost-password"><a href="#">Lost your password?</a></label>
                    </div>
                    <div class="inline-box mb-5 mt-4">
                        <button class="btn-fill" type="submit" value="Login">Login</button>
                        <a href="#" class="btn-register"><i class="fas fa-user"></i>Register Here!</a>
                    </div>
                </form>
                <label>Login connect with your Social Network</label>
                <div class="login-box-social">
                    <ul>
                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal End-->
<!-- Jquery Js -->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- Bootstrap Js -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<!-- Bootstrap Js -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Plugins Js -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<!-- Owl Carousel Js -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- Smoothscroll Js -->
{{--<script src="{{ asset('assets/js/smoothscroll.min.js') }}"></script>--}}
<!-- Custom Js -->
<script src="{{ asset('assets/js/main.js') }}"></script>
@stack('scripts')
</body>
</html>

<header class="site-header">
    <div id="header-2" class="header-area header-fixed">
        <div class="masthead-container header-controll">
            <div class="container">
                <div class="row gutters-10 d-flex justify-content-between align-items-center">
                    <div class="col-lg-3 d-flex justify-content-center">
                        <div class="site-branding">
                            <a class="dark-logo" href="{{ route('main.index') }}">
                                <img src="{{ asset('assets/images/logo-main-dark.png') }}"
                                     alt="{{ config('app.name') }}" title="{{ config('app.name') }}">
                            </a>
                            <a class="light-logo" href="{{ route('main.index') }}">
                                <img src="{{ asset('assets/images/logo-main-light.png') }}"
                                     alt="{{ config('app.name') }}" title="{{ config('app.name') }}">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div id="site-navigation" class="main-navigation">
                            <nav class="menu-main-menu-container">
                                <ul id="menu-main-menu" class="menu">
                                    <li @class(['menu-item', 'current-menu-item' => $isActive('main.index')])>
                                        <a href="{{ route('main.index') }}">Home</a>
                                    </li>
                                    <li @class(['menu-item menu-item-has-children', 'current-menu-item' => $isActive('main.cuisines.index')])>
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
                                    <li @class(['menu-item menu-item-has-children', 'current-menu-item' => $isActive('main.recipes.index')])>
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
                                    <li @class(['menu-item', 'current-menu-item' => $isActive('main.posts.index')])>
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
                                <li>
                                    <a href="{{ route('register') }}" class="fill-btn">
                                        <i class="fa-solid fa-user-plus"></i>
                                        <span>Register</span>
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
                                <li>
                                    <a href="{{ route('main.recipes.create') }}" class="fill-btn">
                                        <i class="fa fa-plus"></i>
                                        <span>Submit Recipe</span>
                                    </a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="rt-header-menu mean-container" id="meanmenu">
    <div class="mean-bar mb-3 mb-lg-0">
        <a class="dark-logo" href="{{ route('main.index') }}">
            <img class="logo-small" src="{{ asset('assets/images/logo-main-dark.png') }}" alt="{{ config('app.name') }}" title="{{ config('app.name') }}">
        </a>
        <div class="nav-items">
            @guest()
                <a class="me-2" href="{{ route('login') }}">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    <span>Login</span>
                </a>
                <a class="me-2" href="{{ route('register') }}" title="Register">
                    <i class="fa-solid fa-user-plus"></i>
                </a>
            @endguest
            @auth()
                <a class="header-submit-icon-mobile me-2" href="{{ route('main.recipes.create') }}">
                    <i class="fa-sharp fa-solid fa-plus"></i>
                    <span>Add Recipe</span>
                </a>
                <form action="{{ route('logout') }}" method="post" class="header-logout-form-mobile me-2">
                    @csrf
                    <button class="header-logout-button-mobile">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span class="d-sm-inline-flex d-none">Logout</span>
                    </button>
                </form>
            @endauth
            <span class="sidebarBtn me-3 fs-4"><i class="fa-solid fa-bars"></i></span>
        </div>
    </div>

    <div class="rt-slide-nav">
        <div class="offscreen-navigation">
            <nav class="menu-main-menu-container">
                <ul id="menu-main-menu" class="menu">
                    <li class="menu-item">
                        <a href="{{ route('main.index') }}">Home</a>
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

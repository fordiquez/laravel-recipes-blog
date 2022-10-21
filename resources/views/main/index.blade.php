@extends('layouts.main')

@pushonce('styles')
    @vite(['resources/sass/mdb.scss'])
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endpushonce

@section('content')
    <main id="main" class="site-main">
        <div class="elementor">
            <div class="elementor-inner">
                <div class="elementor-section-wrap">
                    <!-- Carousel -->
                    <section class="elementor-section elementor-element">
                        <div class="elementor-container">
                            <div id="carousel" class="elementor-row carousel slide carousel-fade" data-mdb-ride="carousel">
                                <div class="carousel-indicators">
                                    @foreach($carousel as $item)
                                        <button type="button" data-mdb-target="#carousel" data-mdb-slide-to="{{ $loop->index }}" @if($loop->first) class="active" aria-current="true" @endif aria-label="Slide {{ $loop->iteration }}"></button>
                                    @endforeach
                                </div>

                                <div class="carousel-inner">
                                    @foreach($carousel as $item)
                                        <div @class(['carousel-item ranna-slider-content-layout1 center', 'active' => $loop->first])>
                                            <img src="{{ asset($item->getPhoto()) }}" class="d-block w-100" alt="{{ $item->title }}" title="{{ $item->title }}" />
                                            <div class="carousel-caption d-none d-md-block">
                                                <div class="item-content">
                                                    <span class="sub-title">
                                                        <a href="{{ route('main.recipes.index', ['cuisine_id' => [0 => $item->cuisine->id ]]) }}" rel="cuisine">{{ $item->cuisine->title }}</a>
                                                    </span>
                                                    <h2 class="item-title">
                                                        <a href="{{ route('main.recipes.show', $item->slug) }}">
                                                            {{ $item->title }}
                                                        </a>
                                                    </h2>
                                                    <div class="post-meta">
                                                        <ul class="entry-meta">
                                                            <li class="author-meta">
                                                                <i class="fa fa-user" aria-hidden="true"></i>by {{ $item->user->getFullName() }}
                                                            </li>
                                                            <li class="rt-cook-time">
                                                                <i class="fa fa-clock-o"></i>{{ $item->cooking_time }}
                                                            </li>

                                                            <li class="single-meta">
                                                                @auth()
                                                                    <form action="{{ route('main.recipe.likes', $item) }}" method="post">
                                                                        @csrf
                                                                        <button class="bg-transparent text-danger p-0">
                                                                            <i @class(['fa-heart', $item->isLikedRecipe()])></i>
                                                                            <span>{{ $item->likes_count }}</span>
                                                                        </button>
                                                                    </form>
                                                                @endauth
                                                                @guest()
                                                                    <a href="{{ route('login') }}" title="Authorize to like it">
                                                                        <i class="fa-regular fa-heart"></i>
                                                                        <span>{{ $item->likes_count }}</span>
                                                                    </a>
                                                                @endguest
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <button class="carousel-control-prev" type="button" data-mdb-target="#carousel" data-mdb-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-mdb-target="#carousel" data-mdb-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </section>
                    <!-- 3 column recipes -->
                    <section class="elementor-section elementor-element">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-element">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-widget">
                                                <div class="elementor-widget-container">
                                                    <div class="product-box-layout1 post-grid-default post-grid-style1">
                                                        <div class="row auto-clear">
                                                            @foreach($randomRecipes as $recipe)
                                                                <div class="col-lg-4 col-md-4 col-sm-2 col-12">
                                                                    <div class="rtin-single-post">
                                                                        <div class="rtin-img">
                                                                            <a href="{{ route('main.recipes.show', $recipe->slug) }}">
                                                                                <img src="{{ asset($recipe->getPhoto()) }}" class="wp-post-image" alt="{{ $recipe->title }}" title="{{ $recipe->title }}">
                                                                            </a>
                                                                        </div>
                                                                        <div class="recipe__data-info">
                                                                            <div>
                                                                                <i class="fa-solid fa-calendar-days text-danger"></i>
                                                                                <span>{{ $recipe->getCreatedAtDate() }}</span>
                                                                            </div>
                                                                            <div>
                                                                                @auth()
                                                                                    <form action="{{ route('main.recipe.likes', $recipe) }}" method="post">
                                                                                        @csrf
                                                                                        <button class="bg-transparent text-danger p-0">
                                                                                            <i @class(['fa-heart', $recipe->isLikedRecipe()])></i>
                                                                                            <span>{{ $recipe->likes_count }}</span>
                                                                                        </button>
                                                                                    </form>
                                                                                @endauth
                                                                                @guest()
                                                                                    <a href="{{ route('login') }}" title="Authorize to like it">
                                                                                        <i class="fa-regular fa-heart"></i>
                                                                                        <span>{{ $recipe->likes_count }}</span>
                                                                                    </a>
                                                                                @endguest
                                                                            </div>
                                                                        </div>
                                                                        <div class="item-content rtin-content">
                                                                        <span class="sub-title">
                                                                            <a href="{{ route('main.recipes.index', ['cuisine_id' => [0 => $recipe->cuisine_id]]) }}">
                                                                                {{ $recipe->cuisine->title }}
                                                                            </a>
                                                                        </span>
                                                                            <h3 class="item-title">
                                                                                <a href="{{ route('main.recipes.show', $recipe->slug) }}">
                                                                                    {{ $recipe->title }}
                                                                                </a>
                                                                            </h3>
                                                                            <ul class="entry-meta">
                                                                                <li class="author-meta">
                                                                                    <i class="fa fa-user" aria-hidden="true"></i>by {{ $recipe->user->getFullName() }}
                                                                                </li>
                                                                                <li class="rt-cook-time">
                                                                                    <i class="fa fa-clock-o"></i>{{ $recipe->cooking_time }}
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Trending recipes with right sidebar -->
                    <section class="elementor-section elementor-element">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-66 elementor-element">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-widget">
                                                <div class="elementor-widget-container">
                                                    <div class="sec-title style1 left barshow">
                                                        <div class="sec-title-holder">
                                                            <h2 class="rtin-title">
                                                                Trending Recipes<span class="title-bar"></span>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-widget">
                                                <div class="elementor-widget-container">
                                                    <div class="post-single-default product-box-layout1 post-single-style1 center">
                                                        <div class="row auto-clear">
                                                            <div class="col-12">
                                                                <div class="rtin-single-post">
                                                                    <div class="rtin-img">
                                                                        <a href="{{ route('main.recipes.show', $singleRecipe->slug) }}">
                                                                            <img src="{{ asset($singleRecipe->getPhoto()) }}" class="wp-post-image" alt="{{ $singleRecipe->title }}" title="{{ $singleRecipe->title }}">
                                                                        </a>
                                                                    </div>
                                                                    <div class="recipe__data-info">
                                                                        <div>
                                                                            <i class="fa-solid fa-calendar-days text-danger"></i>
                                                                            <span>{{ $singleRecipe->getCreatedAtDate() }}</span>
                                                                        </div>
                                                                        <div>
                                                                            @auth()
                                                                                <form action="{{ route('main.recipe.likes', $singleRecipe) }}" method="post">
                                                                                    @csrf
                                                                                    <button class="bg-transparent text-danger p-0">
                                                                                        <i @class(['fa-heart', $singleRecipe->isLikedRecipe()])></i>
                                                                                        <span>{{ $singleRecipe->likes_count }}</span>
                                                                                    </button>
                                                                                </form>
                                                                            @endauth
                                                                            @guest()
                                                                                <a href="{{ route('login') }}" title="Authorize to like it">
                                                                                    <i class="fa-regular fa-heart"></i>
                                                                                    <span>{{ $singleRecipe->likes_count }}</span>
                                                                                </a>
                                                                            @endguest
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-content">
                                                                        <span class="sub-title">
                                                                            <a href="{{ route('main.recipes.index', ['cuisine_id' => [0 => $singleRecipe->cuisine_id]]) }}">
                                                                                {{ $singleRecipe->cuisine->title }}
                                                                            </a>
                                                                        </span>
                                                                        <h3 class="item-title">
                                                                            <a href="{{ route('main.recipes.show', $singleRecipe->slug) }}">
                                                                                {{ $singleRecipe->title }}
                                                                            </a>
                                                                        </h3>
                                                                        <div>{!! $singleRecipe->description !!}</div>
                                                                        <ul class="entry-meta mt-2">
                                                                            <li class="author-meta">
                                                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                                                by <a href="{{ route('admin.users.show', $singleRecipe->user->id) }}" title="{{ $singleRecipe->user->getFullName() }}">
                                                                                    {{ $singleRecipe->user->getFullName() }}
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-widget">
                                                <div class="elementor-widget-container">
                                                    <div class="product-box-layout1 post-grid-default post-grid-style1">
                                                        <div class="row auto-clear">
                                                            @foreach($trendingRecipes as $trending)
                                                                <div class="col-lg-6 col-md-6 col-sm-2 col-12">
                                                                    <div class="rtin-single-post">
                                                                        <div class="rtin-img">
                                                                            <a href="{{ route('main.recipes.show', $trending->slug) }}">
                                                                                <img class="wp-post-image"
                                                                                     src="{{ asset($trending->getPhoto()) }}"
                                                                                     alt="{{ $trending->title }}" title="{{ $trending->title }}">
                                                                            </a>
                                                                        </div>
                                                                        <div class="recipe__data-info">
                                                                            <div>
                                                                                <i class="fa-solid fa-calendar-days text-danger"></i>
                                                                                <span>{{ $trending->getCreatedAtDate() }}</span>
                                                                            </div>
                                                                            <div>
                                                                                @auth()
                                                                                    <form action="{{ route('main.recipe.likes', $trending) }}" method="post">
                                                                                        @csrf
                                                                                        <button class="bg-transparent text-danger p-0">
                                                                                            <i @class(['fa-heart', $trending->isLikedRecipe()])></i>
                                                                                            <span>{{ $trending->likes_count }}</span>
                                                                                        </button>
                                                                                    </form>
                                                                                @endauth
                                                                                @guest()
                                                                                    <a href="{{ route('login') }}" title="Authorize to like it">
                                                                                        <i class="fa-regular fa-heart"></i>
                                                                                        <span>{{ $trending->likes_count }}</span>
                                                                                    </a>
                                                                                @endguest
                                                                            </div>
                                                                        </div>
                                                                        <div class="item-content rtin-content">
                                                                        <span class="sub-title">
                                                                            <a href="{{ route('main.recipes.index', ['cuisine_id' => [0 => $trending->cuisine_id]]) }}">{{ $trending->cuisine->title }}</a>
                                                                        </span>
                                                                            <h3 class="item-title">
                                                                                <a href="{{ route('main.recipes.show', $trending->slug) }}">
                                                                                    {{ $trending->title }}
                                                                                </a>
                                                                            </h3>
                                                                            <ul class="entry-meta">
                                                                                <li class="author-meta">
                                                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                                                    by <a href="{{ route('admin.users.show', $trending->user->id) }}" title="{{ $trending->user->getFullName() }}">
                                                                                        {{ $trending->user->getFullName() }}
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-element">
                                    <x-main.sidebar></x-main.sidebar>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Popular recipes -->
                    <section class="elementor-section elementor-element">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-widget">
                                                <div class="elementor-widget-container">
                                                    <div class="sec-title style1 left barshow">
                                                        <div class="sec-title-holder">
                                                            <h2 class="rtin-title">
                                                                Popular Recipes<span class="title-bar"></span>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-widget">
                                                <div class="elementor-widget-container">
                                                    <div class="post-list-default post-list-style1 left">
                                                        <div class="row auto-clear">
                                                            @foreach($randomRecipes as $recipe)
                                                                <div class="col-sm-6 col-xl-12">
                                                                    <div class="product-box-layout3 justify-content-between">
                                                                        <figure class="item-figure">
                                                                            <a href="{{ route('main.recipes.show', $recipe->slug) }}">
                                                                                <img width="420" height="338" src="{{ asset($recipe->getPhoto()) }}" alt="{{ $recipe->title }}" title="{{ $recipe->title }}">
                                                                            </a>
                                                                        </figure>
                                                                        <div class="item-content">
                                                                        <span class="sub-title">
                                                                            <span class="sub-title">
                                                                                <a href="{{ route('main.recipes.index', ['cuisine_id' => [0 => $recipe->cuisine_id]]) }}">
                                                                                    {{ $recipe->cuisine->title }}
                                                                                </a>
                                                                            </span>
                                                                        </span>
                                                                            <h3 class="item-title">
                                                                                <a href="{{ route('main.recipes.show', $recipe->slug) }}">
                                                                                    {{ $recipe->title }}
                                                                                </a>
                                                                            </h3>
                                                                            <div>{!! $recipe->description !!}</div>
                                                                            <ul class="entry-meta mt-2">
                                                                                <li>
                                                                                    <i class="fa-solid fa-calendar-days text-danger"></i>
                                                                                    <span>{{ $recipe->getCreatedAtDate() }}</span>
                                                                                </li>
                                                                                <li class="rt-cook-time">
                                                                                    <i class="fa fa-clock-o"></i>
                                                                                    {{ $recipe->cooking_time }}
                                                                                </li>
                                                                                <li>
                                                                                    @auth()
                                                                                        <form action="{{ route('main.recipe.likes', $recipe) }}" method="post">
                                                                                            @csrf
                                                                                            <button class="bg-transparent text-danger p-0">
                                                                                                <i @class(['fa-heart', $recipe->isLikedRecipe()])></i>
                                                                                                <span>{{ $recipe->likes_count }}</span>
                                                                                            </button>
                                                                                        </form>
                                                                                    @endauth
                                                                                    @guest()
                                                                                        <a href="{{ route('login') }}" title="Authorize to like it">
                                                                                            <i class="fa-regular fa-heart"></i>
                                                                                            <span>{{ $recipe->likes_count }}</span>
                                                                                        </a>
                                                                                    @endguest
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Editor's choice -->
                    <section class="elementor-section elementor-element">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                                <div class="elementor-column elementor-col-100 elementor-element">
                                    <div class="elementor-column-wrap elementor-element-populated">
                                        <div class="elementor-widget-wrap">
                                            <div class="elementor-element elementor-widget">
                                                <div class="elementor-widget-container">
                                                    <div class="sec-title style1 left barshow">
                                                        <div class="sec-title-holder">
                                                            <h2 class="rtin-title">
                                                                Editor's Choice<span class="title-bar"></span>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-widget">
                                                <div class="elementor-widget-container">
                                                    <div class="post-box-default post-box-style1 center">
                                                        <div class="row auto-clear">
                                                            @foreach($randomRecipes as $recipe)
                                                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                                                    <div class="rtin-single-post">
                                                                        <div class="rtin-img">
                                                                            <a href="{{ route('main.recipes.show', $recipe->slug) }}">
                                                                                <img src="{{ asset($recipe->getPhoto()) }}" alt="{{ $recipe->title }}" title="{{ $recipe->title }}">
                                                                            </a>
                                                                        </div>
                                                                        <div class="rtin-content">
                                                                            <h3 class="rtin-title">
                                                                                <a href="{{ route('main.recipes.show', $recipe->slug) }}">
                                                                                    {{ $recipe->title }}
                                                                                </a>
                                                                            </h3>
                                                                            <div class="post-meta">
                                                                                <ul>
                                                                                    <li>
                                                                                        <i class="fa-solid fa-calendar-days text-danger"></i>
                                                                                        <span>{{ $recipe->getCreatedAtDate() }}</span>
                                                                                    </li>
                                                                                    <li class="author-meta">
                                                                                        <i class="fa fa-user" aria-hidden="true"></i>
                                                                                        by {{ $recipe->user->getFullName() }}
                                                                                    </li>
                                                                                    <li>
                                                                                        @auth()
                                                                                            <form action="{{ route('main.recipe.likes', $recipe) }}" method="post">
                                                                                                @csrf
                                                                                                <button class="bg-transparent text-danger p-0">
                                                                                                    <i @class(['fa-heart', $recipe->isLikedRecipe()])></i>
                                                                                                    <span>{{ $recipe->likes_count }}</span>
                                                                                                </button>
                                                                                            </form>
                                                                                        @endauth
                                                                                        @guest()
                                                                                            <a href="{{ route('login') }}" title="Authorize to like it">
                                                                                                <i class="fa-regular fa-heart"></i>
                                                                                                <span>{{ $recipe->likes_count }}</span>
                                                                                            </a>
                                                                                        @endguest
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection

@pushonce('scripts')
    @vite(['resources/js/mdb.js'])
@endpushonce

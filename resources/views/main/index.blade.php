@extends('layouts.main')

@pushonce('styles')
    @vite(['resources/sass/mdb.scss'])
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
                                            <img src="{{ $item->getPhoto() }}" class="d-block w-100" alt="{{ $item->title }}" title="{{ $item->title }}" />
                                            <div class="carousel-caption d-none d-md-block">
                                                <div class="item-content">
                                                    <span class="sub-title">
                                                        <a href="{{ route('main.recipes.index', ['cuisine_id' => [0 => $item->cuisine->id ]]) }}" rel="cuisine">{{ $item->cuisine->title }}</a>
                                                    </span>
                                                    <h2 class="item-title">
                                                        <a href="{{ route('main.recipes.show', $item) }}">
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
                                                            <li>
                                                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                                                <a href="{{ route('main.index') }}">{{ rand(0, 1000) }}</a>
                                                            </li>
                                                            <li class="single-meta">
                                                                <a href="#" data-toggle="modal" data-target="#rt-like-check798" class="like-recipe not-looged-in">
                                                                    <i class="fa fa-heart-o"></i><span>{{ rand(0, 1000) }}</span>
                                                                </a>
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
                                                                            <a href="{{ route('main.recipes.show', $recipe) }}">
                                                                                <img src="{{ asset($recipe->getPhoto()) }}" class="wp-post-image" alt="{{ $recipe->title }}" title="{{ $recipe->title }}">
                                                                            </a>
                                                                        </div>
                                                                        <div class="item-content rtin-content">
                                                                        <span class="sub-title">
                                                                            <a href="{{ route('main.recipes.index', ['cuisine_id' => [0 => $recipe->cuisine_id]]) }}">
                                                                                {{ $recipe->cuisine->title }}
                                                                            </a>
                                                                        </span>
                                                                            <h3 class="item-title">
                                                                                <a href="{{ route('main.recipes.show', $recipe) }}">
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
                                                                                <li class="single-meta">
                                                                                    <a href="#" class="like-recipe not-looged-in">
                                                                                        <i class="fa fa-heart-o"></i><span>{{ rand(0, 1000) }}</span>
                                                                                        Like
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
                                                                        <a href="{{ route('main.recipes.show', $singleRecipe) }}">
                                                                            <img src="{{ $singleRecipe->getPhoto() }}" class="wp-post-image" alt="{{ $singleRecipe->title }}" title="{{ $singleRecipe->title }}">
                                                                        </a>
                                                                    </div>

                                                                    <div class="item-content">
                                                                        <span class="sub-title">
                                                                            <a href="{{ route('main.recipes.index', ['cuisine_id' => [0 => $singleRecipe->cuisine_id]]) }}">
                                                                                {{ $singleRecipe->cuisine->title }}
                                                                            </a>
                                                                        </span>
                                                                        <h3 class="item-title">
                                                                            <a href="{{ route('main.recipes.show', $singleRecipe) }}">
                                                                                {{ $singleRecipe->title }}
                                                                            </a>
                                                                        </h3>
                                                                        {!! $singleRecipe->description !!}
                                                                        <ul class="entry-meta d-flex align-items-center justify-content-center mt-2">
                                                                            <li class="rt-cook-time">
                                                                                <i class="fa fa-clock-o"></i>
                                                                                {{ $singleRecipe->cooking_time }}
                                                                            </li>
                                                                            <li class="author-meta">
                                                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                                                by {{ $singleRecipe->user->getFullName() }}
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
                                                                            <a href="{{ route('main.recipes.show', $trending) }}">
                                                                                <img class="wp-post-image"
                                                                                     src="{{ $trending->getPhoto() }}"
                                                                                     alt="{{ $trending->title }}" title="{{ $trending->title }}">
                                                                            </a>
                                                                        </div>
                                                                        <div class="item-content rtin-content">
                                                                        <span class="sub-title">
                                                                            <a href="{{ route('main.recipes.index', ['cuisine_id' => [0 => $trending->cuisine_id]]) }}">{{ $trending->cuisine->title }}</a>
                                                                        </span>
                                                                            <h3 class="item-title">
                                                                                <a href="{{ route('main.recipes.show', $trending) }}">
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
                                                                                <li class="single-meta">
                                                                                    <a href="#" class="like-recipe not-looged-in">
                                                                                        <i class="fa fa-heart-o"></i>
                                                                                        <span>{{ rand(0, 1000) }}</span>
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
                                                                            <a href="{{ route('main.recipes.show', $recipe) }}">
                                                                                <img width="420" height="338" src="{{ $recipe->getPhoto() }}" alt="{{ $recipe->title }}" title="{{ $recipe->title }}">
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
                                                                                <a href="{{ route('main.recipes.show', $recipe) }}">
                                                                                    {{ $recipe->title }}
                                                                                </a>
                                                                            </h3>
                                                                            {!! $recipe->description !!}
                                                                            <ul class="entry-meta">
                                                                                <li class="rt-cook-time">
                                                                                    <i class="fa fa-clock-o"></i>
                                                                                    {{ $recipe->cooking_time }}
                                                                                </li>
                                                                                <li>
                                                                                <span class="meta-views meta-item ">
                                                                                    <span class="meta-views meta-item very-high">
                                                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                        {{ rand(100, 10000) }}
                                                                                    </span>
                                                                                </span>
                                                                                </li>
                                                                                <li class="single-meta">
                                                                                    <a href="" class="like-recipe not-looged-in">
                                                                                        <i class="fa fa-heart-o"></i>
                                                                                        <span>{{ rand(0, 1000) }}</span>
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
                                                                            <a href="{{ route('main.recipes.show', $recipe) }}">
                                                                                <img src="{{ $recipe->getPhoto() }}" alt="{{ $recipe->title }}" title="{{ $recipe->title }}">
                                                                            </a>
                                                                        </div>
                                                                        <div class="rtin-content">
                                                                            <h3 class="rtin-title">
                                                                                <a href="{{ route('main.recipes.show', $recipe) }}">
                                                                                    {{ $recipe->title }}
                                                                                </a>
                                                                            </h3>
                                                                            <div class="post-meta">
                                                                                <ul>
                                                                                    <li class="rt-cook-time">
                                                                                        <i class="fa fa-clock-o"></i>
                                                                                        {{ $recipe->cooking_time }}
                                                                                    </li>
                                                                                    <li class="author-meta">
                                                                                        <i class="fa fa-user" aria-hidden="true"></i>
                                                                                        by {{ $recipe->user->getFullName() }}
                                                                                    </li>

                                                                                    <li class="single-meta">
                                                                                        <a href="#" class="like-recipe not-looged-in">
                                                                                            <i class="fa fa-heart-o"></i>
                                                                                            <span>{{ rand(0, 1000) }}</span>
                                                                                        </a>
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

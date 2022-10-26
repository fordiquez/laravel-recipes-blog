@extends('layouts.main')

@pushonce('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endpushonce

@section('breadcrumb')
    <x-main.breadcrumb title="Recipes"></x-main.breadcrumb>
@endsection

@section('content')
    <main id="main" class="site-main">
        <article class="page">
            <div class="entry-content">
                <div class="elementor">
                    <div class="elementor-inner">
                        <div class="elementor-section-wrap">
                            <section class="elementor-section elementor-element">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-66 elementor-element">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-widget">
                                                        <div class="elementor-widget-container">
                                                            <div class="adv-search-wrap">
                                                                <form class="advanced-search"
                                                                      action="{{ route('main.recipes.index') }}"
                                                                      method="get">
                                                                    <div class="input-group">
                                                                        <input type="text" name="title"
                                                                               class="form-control"
                                                                               placeholder="Search recipe by title"
                                                                               value="{{ request()->query('title') }}">
                                                                        <div class="btn-group">
                                                                            <div class="input-group-btn">
                                                                                <button type="button" id="rt-adv-search"
                                                                                        class="btn-adv-search">
                                                                                    <i class="icon-plus fa-solid fa-plus"></i>
                                                                                    <i class="icon-minus fa-solid fa-minus"></i>
                                                                                    <span>Advanced Search</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="input-group-btn">
                                                                                <button type="submit"
                                                                                        class="btn-search">
                                                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="advance-search-form">
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-lg-3">
                                                                                <h3 class="item-title">By
                                                                                    Categories</h3>
                                                                                <ul class="search-items">
                                                                                    @foreach($categories as $category)
                                                                                        <li>
                                                                                            <div
                                                                                                class="checkbox checkbox-primary">
                                                                                                <input
                                                                                                    type="checkbox"
                                                                                                    name="category_id[]"
                                                                                                    id="category-{{ $category->id }}"
                                                                                                    value="{{ $category->id }}"
                                                                                                @if(request()->query('category_id'))
                                                                                                    @checked(in_array($category->id, request()->query('category_id')))
                                                                                                    @endif>
                                                                                                <label
                                                                                                    for="category-{{ $category->id }}"
                                                                                                    style="cursor: pointer"
                                                                                                    class="user-select-none">
                                                                                                    {{ $category->title }}
                                                                                                </label>
                                                                                            </div>
                                                                                        </li>
                                                                                    @endforeach
                                                                                </ul>
                                                                                @error('categories')
                                                                                {{ $message }}
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6 col-lg-3">
                                                                                <h3 class="item-title">By Cuisines</h3>
                                                                                <ul class="search-items">
                                                                                    @foreach($cuisines as $cuisine)
                                                                                        <li>
                                                                                            <div
                                                                                                class="checkbox checkbox-primary">
                                                                                                <input
                                                                                                    type="checkbox"
                                                                                                    name="cuisine_id[]"
                                                                                                    id="cuisine-{{ $cuisine->id }}"
                                                                                                    value="{{ $cuisine->id }}"
                                                                                                @if(request()->query('cuisine_id'))
                                                                                                    @checked(in_array($cuisine->id, request()->query('cuisine_id')))
                                                                                                    @endif>
                                                                                                <label
                                                                                                    for="cuisine-{{ $cuisine->id }}"
                                                                                                    style="cursor: pointer"
                                                                                                    class="user-select-none">
                                                                                                    {{ $cuisine->title }}
                                                                                                </label>
                                                                                            </div>
                                                                                        </li>
                                                                                    @endforeach
                                                                                </ul>
                                                                                @error('categories')
                                                                                {{ $message }}
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6 col-lg-3">
                                                                                <h3 class="item-title">By Tags</h3>
                                                                                <ul class="search-items">
                                                                                    @foreach($tags as $tag)
                                                                                        <li>
                                                                                            <div
                                                                                                class="checkbox checkbox-primary">
                                                                                                <input
                                                                                                    type="checkbox"
                                                                                                    name="tag_id[]"
                                                                                                    id="tag-{{ $tag->id }}"
                                                                                                    value="{{ $tag->id }}"
                                                                                                @if(request()->query('tag_id'))
                                                                                                    @checked(in_array($tag->id, request()->query('tag_id')))
                                                                                                    @endif>
                                                                                                <label
                                                                                                    for="tag-{{ $tag->id }}"
                                                                                                    style="cursor: pointer"
                                                                                                    class="user-select-none">
                                                                                                    {{ $tag->title }}
                                                                                                </label>
                                                                                            </div>
                                                                                        </li>
                                                                                    @endforeach
                                                                                </ul>
                                                                                @error('categories')
                                                                                {{ $message }}
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6 col-lg-3">
                                                                                <h3 class="item-title">By
                                                                                    Difficulty</h3>
                                                                                <ul class="search-items">
                                                                                    @foreach($levels as $key => $level)
                                                                                        <li>
                                                                                            <div
                                                                                                class="checkbox checkbox-primary">
                                                                                                <input
                                                                                                    type="checkbox"
                                                                                                    name="level[]"
                                                                                                    id="{{ $key }}"
                                                                                                    value="{{ $key }}"
                                                                                                @if(request()->query('level'))
                                                                                                    @checked(in_array($key, request()->query('level')))
                                                                                                    @endif>
                                                                                                <label for="{{ $key }}"
                                                                                                       style="cursor: pointer"
                                                                                                       class="user-select-none">
                                                                                                    {{ $level }}
                                                                                                </label>
                                                                                            </div>
                                                                                        </li>
                                                                                    @endforeach
                                                                                </ul>
                                                                                @error('categories')
                                                                                {{ $message }}
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-widget">
                                                        <div class="elementor-widget-container">
                                                            <div
                                                                class="product-box-layout1 post-grid-default post-grid-style1">
                                                                <div class="row auto-clear">
                                                                    @foreach($recipes as $recipe)
                                                                        <div class="col-lg-6 col-md-6 col-sm-2">
                                                                            <div class="rtin-single-post">
                                                                                <div class="rtin-img">
                                                                                    <a href="{{ route('main.recipes.show', $recipe->slug) }}">
                                                                                        <img class="wp-post-image"
                                                                                             src="{{ asset($recipe->getPhoto()) }}"
                                                                                             alt="{{ $recipe->title }}"
                                                                                             title="{{ $recipe->title }}">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="recipe__data-info">
                                                                                    <div>
                                                                                        <i class="fa-solid fa-calendar-days text-danger text-danger"></i>
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
                                                                                        <a href="{{ $recipe->cuisine->slug }}"
                                                                                           rel="tag">
                                                                                            {{ $recipe->cuisine->title }}
                                                                                        </a>
                                                                                    </span>
                                                                                    <h3 class="item-title">
                                                                                        <a href="{{ route('main.recipes.show', $recipe->slug) }}">
                                                                                            <span>{{ $recipe->title }}</span>
                                                                                        </a>
                                                                                    </h3>
                                                                                    <ul class="list-inline d-flex justify-content-between mt-2 mb-0">
                                                                                        <li class="rt-cook-time" title="Cooking time">
                                                                                            <div class="feature-wrap">
                                                                                                <div class="media">
                                                                                                    <div
                                                                                                        class="media-body space-sm d-flex flex-column align-items-center">
                                                                                                        <i class="fa-solid fa-clock-rotate-left fs-4 text-danger"></i>
                                                                                                        <div
                                                                                                            class="feature-sub-title ms-1 fs-6">
                                                                                                            {{ $recipe->cooking_time }}
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="rt-serving-people" title="Servings">
                                                                                            <div class="feature-wrap">
                                                                                                <div class="media">
                                                                                                    <div
                                                                                                        class="media-body space-sm d-flex flex-column align-items-center">
                                                                                                        <i class="fa-solid fa-utensils fs-4 text-danger"></i>
                                                                                                        <div
                                                                                                            class="feature-sub-title ms-1 fs-6">
                                                                                                            {{ $recipe->servings }}
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="rt-difficulty" title="Level of difficulty">
                                                                                            <div class="feature-wrap">
                                                                                                <div class="media">
                                                                                                    <div
                                                                                                        class="media-body space-sm d-flex flex-column align-items-center">
                                                                                                        <i @class(['fa-regular fs-4 text-danger', $recipe->getLevelStarClass()])></i>
                                                                                                        <div
                                                                                                            class="feature-sub-title ms-1 fs-6">
                                                                                                            {{ $recipe->level }}
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                    {{ $recipes->links('pagination.main') }}
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
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </main>
@endsection

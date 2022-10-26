@extends('layouts.main')

@section('breadcrumb')
    <x-main.breadcrumb title="{{ $author->getFullName() }}"></x-main.breadcrumb>
@endsection

@section('content')
    <div class="col-lg-8">
        <main id="main" class="site-main">
            <div class="media about-author">
                <div class="pull-left">
                    <img src="{{ asset($author->getPhoto()) }}" class="avatar" height="105" width="105"
                         alt="{{ $author->getFullName() }}" title="{{ $author->getFullName() }}">
                </div>
                <div class="media-body">
                    <div class="about-author-info">
                        <div class="author-title">{{ $author->getFullName() }}</div>
                        <div class="author-designation">Author Information</div>
                    </div>
                </div>
            </div>

            <article class="page">
                <div class="entry-content">
                    <div class="elementor">
                        <div class="elementor-inner">
                            <div class="elementor-section-wrap">
                                <section class="elementor-section elementor-element">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-element">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-widget">
                                                            <div class="elementor-widget-container">
                                                                @if($author->recipes()->count())
                                                                    <h3>Recipes</h3>
                                                                    <div
                                                                        class="post-list-default post-list-style1 left">
                                                                        <div class="row auto-clear">
                                                                            @foreach($author->recipes as $recipe)
                                                                                <div class="col-sm-6 col-xl-12">
                                                                                    <div class="product-box-layout3">
                                                                                        <figure class="item-figure">
                                                                                            <a href="{{ route('main.recipes.show', $recipe->slug) }}">
                                                                                                <img width="550"
                                                                                                     src="{{ asset($recipe->getPhoto()) }}"
                                                                                                     alt="{{ $recipe->title }}"
                                                                                                     title="{{ $recipe->title }}">
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
                                                                                            <ul class="entry-meta">
                                                                                                <li>
                                                                                                    <i class="fa-solid fa-calendar-days"></i>
                                                                                                    <span>{{ $recipe->getCreatedAtDate() }}</span>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <i class="fa fa-tag"
                                                                                                       aria-hidden="true"></i>
                                                                                                    @foreach($recipe->categories as $category)
                                                                                                        <span>
                                                                                                        <a href="{{ route('main.recipes.index', ['category_id' => [0 => $category->id]]) }}">
                                                                                                            {{ $category->title }}
                                                                                                        </a>
                                                                                                    </span>
                                                                                                    @endforeach
                                                                                                </li>
                                                                                                <li>
                                                                                                    @auth()
                                                                                                        <form
                                                                                                            action="{{ route('main.recipe.likes', $recipe) }}"
                                                                                                            method="post">
                                                                                                            @csrf
                                                                                                            <button
                                                                                                                class="bg-transparent text-danger p-0">
                                                                                                                <i @class(['fa-heart', $recipe->isLikedRecipe()])></i>
                                                                                                                <span>{{ $recipe->likes_count }}</span>
                                                                                                            </button>
                                                                                                        </form>
                                                                                                    @endauth
                                                                                                    @guest()
                                                                                                        <a href="{{ route('login') }}"
                                                                                                           title="Authorize to like it">
                                                                                                            <i class="fa-regular fa-heart"></i>
                                                                                                            <span>{{ $recipe->likes_count }}</span>
                                                                                                        </a>
                                                                                                    @endguest
                                                                                                </li>
                                                                                            </ul>
                                                                                            <a class="item-btn"
                                                                                               href="{{ route('main.recipes.show', $recipe->slug) }}">
                                                                                                <span>READ MORE</span>
                                                                                                <i class="fa fa-arrow-right"></i>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                @else
                                                                    <section class="no-results not-found">
                                                                        <h3 class="page-title">Recipes not found</h3>
                                                                    </section>
                                                                @endif

                                                                @if($author->posts()->count())
                                                                    <h3>Posts</h3>
                                                                    <div class="post-list-default post-list-style1 left">
                                                                        <div class="row auto-clear">
                                                                            @foreach($author->posts as $post)
                                                                                <div class="col-sm-6 col-xl-12">
                                                                                    <div class="product-box-layout3">
                                                                                        <figure class="item-figure">
                                                                                            <a href="{{ route('main.posts.show', $post->slug) }}">
                                                                                                <img width="550" src="{{ asset($post->getPhoto()) }}" alt="{{ $post->title }}" title="{{ $post->title }}">
                                                                                            </a>
                                                                                        </figure>
                                                                                        <div class="item-content">
                                                                                            <h3 class="item-title">
                                                                                                <a href="{{ route('main.posts.show', $post->slug) }}">
                                                                                                    {{ $post->title }}
                                                                                                </a>
                                                                                            </h3>
                                                                                            <ul class="entry-meta">
                                                                                                <li>
                                                                                                    <i class="fa-solid fa-calendar-days"></i>
                                                                                                    <span>{{ $post->getCreatedAtDate() }}</span>
                                                                                                </li>
                                                                                            </ul>
                                                                                            <a class="item-btn"
                                                                                               href="{{ route('main.posts.show', $post->slug) }}">
                                                                                                <span>READ MORE</span>
                                                                                                <i class="fa fa-arrow-right"></i>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                @else
                                                                    <section class="no-results not-found">
                                                                        <h3 class="page-title">Posts not found</h3>
                                                                    </section>
                                                                @endif
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
                </div>
            </article>
        </main>
    </div>
    <div class="col-lg-4">
        <x-main.sidebar></x-main.sidebar>
    </div>
@endsection

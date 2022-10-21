@extends('layouts.main')

@section('breadcrumb')
    <x-main.breadcrumb title="Account Details"></x-main.breadcrumb>
@endsection

@section('content')
    <section class="my-account-wrap">
        <div class="container">
            <div class="row">
                <x-main.account-nav></x-main.account-nav>
                <div class="col-lg-8 col-12">
                    <div class="my-account-content tab-content">
                        <div class="favourites">
                            <div class="listing-box-list">
                                @foreach($recipes as $recipe)
                                    <div class="product-box">
                                        <div class="item-img bg--gradient-50">
                                            <div>
                                                <a href="{{ route('main.recipes.show', $recipe->slug) }}">
                                                    <img src="{{ asset($recipe->getPhoto()) }}" class="wp-post-image"
                                                         alt="{{ $recipe->title }}" title="{{ $recipe->title }}">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-content rtin-content">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <i class="fa-solid fa-calendar-days text-danger text-danger"></i>
                                                    <span class="fs-6">{{ $recipe->getCreatedAtDate() }}</span>
                                                </div>
                                                <form action="{{ route('main.recipe.likes', $recipe) }}"
                                                      method="post">
                                                    @csrf
                                                    <button class="bg-transparent text-danger p-0">
                                                        <i @class(['fa-heart', $recipe->isLikedRecipe()])></i>
                                                        <span>{{ $recipe->likes_count }}</span>
                                                    </button>
                                                </form>
                                            </div>
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
                                                <li class="rt-cook-time">
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
                                                <li class="rt-serving-people">
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
                                                <li class="rt-difficulty">
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
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

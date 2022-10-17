@extends('layouts.main')

@section('breadcrumb')
    <x-main.breadcrumb title="{{ $recipe->title }}"></x-main.breadcrumb>
@endsection

@section('content')
    <div class="col-lg-8 col-md-12 col-12">
        <main id="main" class="site-main">
            <div class="single-recipe-layout1 ranna_recipe">
                <div class="row mb-4">
                    <div class="col-xl-9 col-md-9 col-12">
                        <ul class="entry-meta">
                            <li class="single-meta">
                                <i class="fa-solid fa-calendar-days"></i>
                                <span>{{ $recipe->created_at }}</span>
                            </li>
                            <li class="single-meta">
                                <i class="fa-solid fa-user"></i>by
                                <a href="{{ route('admin.users.show', $recipe->user_id) }}">
                                    {{ $recipe->user->getFullName() }}
                                </a>
                            </li>
                            <li class="single-meta">
                                <a href="#" class="like-recipe not-looged-in">
                                    <i class="fa-regular fa-heart"></i><span>{{ rand(0, 1000) }}</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="entry-meta">
                            @if(count($recipe->categories))
                                <li class="single-meta category-meta">
                                    <i class="fa fa-tags" aria-hidden="true"></i>
                                    <ul class="recipe-categories">
                                        @foreach($recipe->categories as $category)
                                            <li class="ctg-name">
                                                <a href="{{ route('main.recipes.index', ['category_id' => [0 => $category->id]]) }}">
                                                    {{ $category->title }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                            <li class="single-meta">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                Cuisine:
                                <span class="recipe-cuisine">
                                    <a href="{{ route('main.recipes.index', ['cuisine_id' => [0 => $recipe->cuisine_id]]) }}">
                                        {{ $recipe->cuisine->title }}
                                    </a>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-md-3 col-12">
                        <ul class="action-item">
                            <li>
                                <button class="print-share-button" href="#"><i class="fa fa-print"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="item-figure">
                    <img src="{{ asset($recipe->getPhoto()) }}" alt="{{ $recipe->title }}" title="{{ $recipe->title }}">
                </div>
                <div class="item-feature">
                    <ul>
                        <li class="active-4">
                            <div class="feature-wrap">
                                <div class="media">
                                    <div class="feature-icon"><i class="fa-solid fa-clock-rotate-left"></i></div>
                                    <div class="media-body">
                                        <div class="feature-title">Cooking time</div>
                                        <div class="feature-sub-title">{{ $recipe->cooking_time }}</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="active-4">
                            <div class="feature-wrap">
                                <div class="media">
                                    <div class="feature-icon"><i class="fa-solid fa-kitchen-set"></i></div>
                                    <div class="media-body">
                                        <div class="feature-title">Servings</div>
                                        <div class="feature-sub-title">{{ $recipe->servings }}</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="active-4">
                            <div class="feature-wrap">
                                <div class="media">
                                    <div class="feature-icon"><i @class([$recipe->getLevelStarClass()])></i></div>
                                    <div class="media-body">
                                        <div class="feature-title">Difficulty</div>
                                        <div class="feature-sub-title">{{ $recipe->level }}</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="item-description">
                    <div class="elementor">
                        <div class="elementor-inner">
                            <div class="elementor-section-wrap">
                                <section
                                    class="elementor-section elementor-element elementor-section-boxed">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div
                                                class="elementor-column elementor-col-100 elementor-element">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-widget">
                                                            <div class="elementor-widget-container">
                                                                {!! $recipe->description !!}
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

                @if(count($recipe->ingredients))
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="ingridients-wrap">
                                <h3 class="item-title"><i class="fa-solid fa-list-check"></i>Ingredients</h3>
                                <div class="ingredient-list">
                                    <div class="row">
                                        <div class="col-12">
                                            @foreach($recipe->ingredients as $ingredient)
                                                <div class="checkbox checkbox-primary">
                                                    <input id="{{ $ingredient->id }}" type="checkbox">
                                                    <label for="{{ $ingredient->id }}">{{ $ingredient->title }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if(count($recipe->steps))
                    <div class="direction-wrap-layout1">
                        <div class="section-heading heading-dark">
                            <h2 class="item-heading">Step by step recipe</h2>
                        </div>
                        @foreach($recipe->steps as $step)
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="serial-number">Step {{ $step->step }}</div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="direction-box-layout1">
                                        @if($step->getPhoto())
                                            <div class="item-figure">
                                                <img src="{{ asset($step->getPhoto()) }}" class="img-responsive" alt="{{ "Step $step->step" }}" title="{{ "Step $step->step" }}">
                                            </div>
                                        @endif
                                        <div class="item-content">{!! $step->description !!}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

                @if(count($recipe->tags))
                    <div class="tag-share">
                        <ul>
                            <li>
                                <ul class="inner-tag">
                                    @foreach($recipe->tags as $tag)
                                        <li>
                                            <a href="{{ route('main.recipes.index', ['tag_id' => [0 => $tag->id]]) }}">
                                                {{ $tag->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                @endif

                <div class="recipe-author">
                    <div class="media">
                        <div class="pull-left">
                            <img src="{{ asset($recipe->user->getPhoto()) }}" class="avatar" width="150" alt="{{ $recipe->user->getFullName() }}" title="{{ $recipe->user->getFullName() }}">
                        </div>
                        <div class="media-body">
                            <h4 class="author-title">{{ $recipe->user->getFullName() }}</h4>
                            <h5 class="author-sub-title">Lorem ipsum dolor sit amet.</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aut cupiditate delectus distinctio dolores enim error expedita impedit provident sapiente!</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div class="col-lg-4 col-md-12">
        <x-main.sidebar></x-main.sidebar>
    </div>
@endsection

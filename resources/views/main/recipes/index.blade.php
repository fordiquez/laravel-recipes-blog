@extends('layouts.main')

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
                                                                      action="{{ route('main.recipes.index') }}" method="get">
                                                                    <div class="input-group">
                                                                        <input type="text" name="title"
                                                                               class="form-control"
                                                                               placeholder="Search recipe by title">
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
                                                                                <h3 class="item-title">By Categories</h3>
                                                                                <ul class="search-items">
                                                                                    @foreach($categories as $category)
                                                                                        <li>
                                                                                            <div
                                                                                                class="checkbox checkbox-primary">
                                                                                                <input
                                                                                                    type="checkbox"
                                                                                                    name="category_id[]"
                                                                                                    id="category-{{ $category->id }}" value="{{ $category->id }}"
                                                                                                    @if(request()->query('category_id')) @checked(in_array($category->id, request()->query('category_id'))) @endif>
                                                                                                <label for="category-{{ $category->id }}">
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
                                                                                                    id="cuisine-{{ $cuisine->id }}" value="{{ $cuisine->id }}"
                                                                                                @if(request()->query('cuisine_id')) @checked(in_array($cuisine->id, request()->query('cuisine_id'))) @endif>
                                                                                                <label for="cuisine-{{ $cuisine->id }}">
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
                                                                                                    id="tag-{{ $tag->id }}" value="{{ $tag->id }}"
                                                                                                @if(request()->query('tag_id')) @checked(in_array($tag->id, request()->query('tag_id'))) @endif>
                                                                                                <label for="tag-{{ $tag->id }}">
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
                                                                                <h3 class="item-title">By Difficulty</h3>
                                                                                <ul class="search-items">
                                                                                    @foreach($levels as $key => $level)
                                                                                        <li>
                                                                                            <div
                                                                                                class="checkbox checkbox-primary">
                                                                                                <input
                                                                                                    type="checkbox"
                                                                                                    name="level[]"
                                                                                                    id="{{ $key }}" value="{{ $key }}"
                                                                                                @if(request()->query('level')) @checked(in_array($key, request()->query('level'))) @endif>
                                                                                                <label for="{{ $key }}">
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
                                                            <div class="product-box-layout1 post-grid-default post-grid-style1">
                                                                <div class="row auto-clear">
                                                                    @foreach($recipes as $recipe)
                                                                        <div class="col-lg-6 col-md-6 col-sm-2">
                                                                            <div class="rtin-single-post">
                                                                                <div class="rtin-img">
                                                                                    <a href="{{ route('main.recipes.show', $recipe->slug) }}">
                                                                                        <img class="wp-post-image" src="{{ $recipe->getPhoto() }}" alt="{{ $recipe->title }}" title="{{ $recipe->title }}">
                                                                                    </a>
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
                                                                                        <li class="rt-cook-time">
                                                                                            <div class="feature-wrap">
                                                                                                <div class="media">
                                                                                                    <div class="media-body space-sm d-flex flex-column align-items-center">
                                                                                                        <i class="fa-solid fa-clock-rotate-left fs-4"></i>
                                                                                                        <div class="feature-sub-title ms-1 fs-6">
                                                                                                            {{ $recipe->cooking_time }}
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="rt-serving-people">
                                                                                            <div class="feature-wrap">
                                                                                                <div class="media">
                                                                                                    <div class="media-body space-sm d-flex flex-column align-items-center">
                                                                                                        <i class="fa-solid fa-utensils fs-4"></i>
                                                                                                        <div class="feature-sub-title ms-1 fs-6">
                                                                                                            {{ $recipe->servings }}
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li class="rt-difficulty">
                                                                                            <div class="feature-wrap">
                                                                                                <div class="media">
                                                                                                    <div class="media-body space-sm d-flex flex-column align-items-center">
                                                                                                        <i @class(['fa-regular fs-4', $recipe->getLevelStarClass()])></i>
                                                                                                        <div class="feature-sub-title ms-1 fs-6">
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
                                                                    <div
                                                                        class="col-12">
                                                                        <div class="pagination-area">
                                                                            <ul>
                                                                                <li>
                                                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipes-with-sidebar/page/2/">
                                                                                        <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="active">
                                                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipes-with-sidebar/">1</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipes-with-sidebar/page/2/">2</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipes-with-sidebar/page/2/">
                                                                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
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
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-element">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-widget">
                                                        <div class="elementor-widget-container">
                                                            <form role="search" method="get" class="search-form" action="https://radiustheme.com/demo/wordpress/themes/ranna/">
                                                                <div class="row custom-search-input">
                                                                    <div class="input-group col-md-12">
                                                                        <input type="text" class="search-query form-control" placeholder="Search here ..." value="" name="s">
                                                                        <span class="input-group-btn">
                                                                            <button class="btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i>
                                                                            </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-efbf7b1 element-sidebar-title reted-recipe-3 elementor-widget elementor-widget-wp-widget-rt-recent-recipe"
                                                        data-id="efbf7b1" data-element_type="widget"
                                                        data-widget_type="wp-widget-rt-recent-recipe.default">
                                                        <div class="elementor-widget-container">
                                                            <h3>Latest Recipe</h3>
                                                            <div class="widget-latest">
                                                                <ul class="block-list">
                                                                    <li class="single-item">
                                                                        <div class="item-img">
                                                                            <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/nashville-style-hot-chicken-sandwich/"
                                                                               title="Nashville-Style Hot Chicken Sandwich"
                                                                               class="rt-wid-post-img">
                                                                                <img class="rt-lazy"
                                                                                     src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/themes/ranna/assets/img/noimage_150X150.jpg"
                                                                                     alt="Nashville-Style Hot Chicken Sandwich">
                                                                            </a>
                                                                            <div
                                                                                class="count-number">
                                                                                1
                                                                            </div>
                                                                        </div>
                                                                        <div class="item-content">
                                                                            <div class="item-ctg">
                                                                                                    <span
                                                                                                        class="styles"><span
                                                                                                            class="ctg-name"><a
                                                                                                                href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/dinner/"
                                                                                                                rel="tag">Dinner</a></span></span>
                                                                            </div>

                                                                            <h4 class="item-title">
                                                                                <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/nashville-style-hot-chicken-sandwich/">Nashville-Style
                                                                                    Hot Chicken
                                                                                    Sandwich</a>
                                                                            </h4>
                                                                            <div
                                                                                class="posted-date">
                                                                                <i class="fa fa-clock-o"
                                                                                   aria-hidden="true"></i>
                                                                                June 10, 2022
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li class="single-item">
                                                                        <div class="item-img">
                                                                            <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/spiced-pork-and-pasta/"
                                                                               title="Spiced Pork and Pasta"
                                                                               class="rt-wid-post-img">
                                                                                <img loading="lazy"
                                                                                     width="150"
                                                                                     height="150"
                                                                                     src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-6-150x150.jpg"
                                                                                     class="media-object wp-post-image"
                                                                                     alt=""
                                                                                     srcset="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-6-150x150.jpg 150w, https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-6-300x300.jpg 300w, https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-6-100x100.jpg 100w"
                                                                                     sizes="(max-width: 150px) 100vw, 150px">
                                                                            </a>
                                                                            <div
                                                                                class="count-number">
                                                                                2
                                                                            </div>
                                                                        </div>
                                                                        <div class="item-content">
                                                                            <div class="item-ctg">
                                                                                                    <span
                                                                                                        class="styles"><span
                                                                                                            class="ctg-name"><a
                                                                                                                href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/pasta/"
                                                                                                                rel="tag">Pasta</a></span></span>
                                                                            </div>

                                                                            <h4 class="item-title">
                                                                                <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/spiced-pork-and-pasta/">Spiced
                                                                                    Pork and
                                                                                    Pasta</a></h4>
                                                                            <div
                                                                                class="posted-date">
                                                                                <i class="fa fa-clock-o"
                                                                                   aria-hidden="true"></i>
                                                                                June 23, 2020
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li class="single-item">
                                                                        <div class="item-img">
                                                                            <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/pumpkin-cheesecake-with-gingersnapcrust/"
                                                                               title="Pumpkin Cheese cake With Gingersnap Crust"
                                                                               class="rt-wid-post-img">
                                                                                <img width="150"
                                                                                     height="150"
                                                                                     src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-3-150x150.jpg"
                                                                                     class="media-object wp-post-image"
                                                                                     alt=""
                                                                                     loading="lazy"
                                                                                     srcset="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-3-150x150.jpg 150w, https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-3-300x300.jpg 300w, https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-3-100x100.jpg 100w"
                                                                                     sizes="(max-width: 150px) 100vw, 150px">
                                                                            </a>
                                                                            <div
                                                                                class="count-number">
                                                                                3
                                                                            </div>
                                                                        </div>
                                                                        <div class="item-content">
                                                                            <div class="item-ctg">
                                                                                                    <span
                                                                                                        class="styles"><span
                                                                                                            class="ctg-name"><a
                                                                                                                href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/drink/"
                                                                                                                rel="tag">Drink</a></span></span>
                                                                            </div>

                                                                            <h4 class="item-title">
                                                                                <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/pumpkin-cheesecake-with-gingersnapcrust/">Pumpkin
                                                                                    Cheese cake With
                                                                                    Gingersnap
                                                                                    Crust</a></h4>
                                                                            <div
                                                                                class="posted-date">
                                                                                <i class="fa fa-clock-o"
                                                                                   aria-hidden="true"></i>
                                                                                June 22, 2020
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li class="single-item">
                                                                        <div class="item-img">
                                                                            <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/product-juice-blueberry-juice-with-lemon-crema/"
                                                                               title="Product   JUICE Blueberry Juice with Lemon Crema"
                                                                               class="rt-wid-post-img">
                                                                                <img width="150"
                                                                                     height="150"
                                                                                     src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/09/blog13-150x150.jpg"
                                                                                     class="media-object wp-post-image"
                                                                                     alt=""
                                                                                     loading="lazy"
                                                                                     srcset="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/09/blog13-150x150.jpg 150w, https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/09/blog13-300x300.jpg 300w, https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/09/blog13-100x100.jpg 100w"
                                                                                     sizes="(max-width: 150px) 100vw, 150px">
                                                                            </a>
                                                                            <div
                                                                                class="count-number">
                                                                                4
                                                                            </div>
                                                                        </div>
                                                                        <div class="item-content">
                                                                            <div class="item-ctg">
                                                                                                    <span
                                                                                                        class="styles"><span
                                                                                                            class="ctg-name"><a
                                                                                                                href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/drink/"
                                                                                                                rel="tag">Drink</a></span></span>
                                                                            </div>

                                                                            <h4 class="item-title">
                                                                                <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/product-juice-blueberry-juice-with-lemon-crema/">Product
                                                                                    JUICE Blueberry
                                                                                    Juice with
                                                                                    Lemon</a></h4>
                                                                            <div
                                                                                class="posted-date">
                                                                                <i class="fa fa-clock-o"
                                                                                   aria-hidden="true"></i>
                                                                                June 22, 2020
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                    <li class="single-item">
                                                                        <div class="item-img">
                                                                            <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/salami-oven-roasted-are-mozzarella-oelette/"
                                                                               title="Salami Oven Roasted are Mozzarella Oelette"
                                                                               class="rt-wid-post-img">
                                                                                <img width="150"
                                                                                     height="150"
                                                                                     src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-7-150x150.jpg"
                                                                                     class="media-object wp-post-image"
                                                                                     alt=""
                                                                                     loading="lazy"
                                                                                     srcset="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-7-150x150.jpg 150w, https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-7-300x300.jpg 300w, https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2020/06/ranna-wordpress-theme-radiustheme.com-7-100x100.jpg 100w"
                                                                                     sizes="(max-width: 150px) 100vw, 150px">
                                                                            </a>
                                                                            <div
                                                                                class="count-number">
                                                                                5
                                                                            </div>
                                                                        </div>
                                                                        <div class="item-content">
                                                                            <div class="item-ctg">
                                                                                                    <span
                                                                                                        class="styles"><span
                                                                                                            class="ctg-name"><a
                                                                                                                href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/drink/"
                                                                                                                rel="tag">Drink</a></span></span>
                                                                            </div>

                                                                            <h4 class="item-title">
                                                                                <a href="https://radiustheme.com/demo/wordpress/themes/ranna/recipe/salami-oven-roasted-are-mozzarella-oelette/">Salami
                                                                                    Oven Roasted are
                                                                                    Mozzarella
                                                                                    Oelette</a></h4>
                                                                            <div
                                                                                class="posted-date">
                                                                                <i class="fa fa-clock-o"
                                                                                   aria-hidden="true"></i>
                                                                                June 22, 2020
                                                                            </div>
                                                                        </div>
                                                                    </li>


                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-2acb22d elementor-widget elementor-widget-rt-title"
                                                        data-id="2acb22d" data-element_type="widget"
                                                        data-widget_type="rt-title.default">
                                                        <div class="elementor-widget-container">
                                                            <div
                                                                class="sec-title style1 left barshow">
                                                                <div class="sec-title-holder">
                                                                    <h2 class="rtin-title">Subscribe
                                                                        &amp; Follow<span
                                                                            class="title-bar"></span>
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-beeb140 elementor-widget elementor-widget-wp-widget-apsc_widget"
                                                        data-id="beeb140" data-element_type="widget"
                                                        data-widget_type="wp-widget-apsc_widget.default">
                                                        <div class="elementor-widget-container">
                                                            <div
                                                                class="apsc-icons-wrapper clearfix apsc-theme-4 ">
                                                                <div class="apsc-each-profile">
                                                                    <a class="apsc-facebook-icon clearfix"
                                                                       href="https://facebook.com/"
                                                                       target="_blank">
                                                                        <div
                                                                            class="apsc-inner-block">
                                                                                                <span
                                                                                                    class="social-icon"><i
                                                                                                        class="fab fa-facebook-f apsc-facebook"></i><span
                                                                                                        class="media-name">Facebook</span></span>
                                                                            <span
                                                                                class="apsc-count">0</span><span
                                                                                class="apsc-media-type">Fans</span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="apsc-each-profile">
                                                                    <a class="apsc-twitter-icon clearfix"
                                                                       href="https://twitter.com/"
                                                                       target="_blank">
                                                                        <div
                                                                            class="apsc-inner-block">
                                                                                                <span
                                                                                                    class="social-icon"><i
                                                                                                        class="fab fa-twitter apsc-twitter"></i><span
                                                                                                        class="media-name">Twitter</span></span>
                                                                            <span
                                                                                class="apsc-count">0</span><span
                                                                                class="apsc-media-type">Followers</span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="apsc-each-profile">
                                                                    <a class="apsc-instagram-icon clearfix"
                                                                       href="https://instagram.com/"
                                                                       target="_blank">
                                                                        <div
                                                                            class="apsc-inner-block">
                                                                                                <span
                                                                                                    class="social-icon"><i
                                                                                                        class="apsc-instagram fab fa-instagram"></i><span
                                                                                                        class="media-name">Instagram</span></span>
                                                                            <span
                                                                                class="apsc-count">0</span><span
                                                                                class="apsc-media-type">Followers</span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="apsc-each-profile">
                                                                    <a class="apsc-youtube-icon clearfix"
                                                                       href="" target="_blank">
                                                                        <div
                                                                            class="apsc-inner-block">
                                                                                                <span
                                                                                                    class="social-icon"><i
                                                                                                        class="apsc-youtube fab fa-youtube"></i><span
                                                                                                        class="media-name">Youtube</span></span>
                                                                            <span
                                                                                class="apsc-count">0</span><span
                                                                                class="apsc-media-type">Subscriber</span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="apsc-each-profile">
                                                                    <a class="apsc-soundcloud-icon clearfix"
                                                                       href="https://soundcloud.com/"
                                                                       target="_blank">
                                                                        <div
                                                                            class="apsc-inner-block">
                                                                                                <span
                                                                                                    class="social-icon"><i
                                                                                                        class="apsc-soundcloud fab fa-soundcloud"></i><span
                                                                                                        class="media-name">Soundcloud</span></span>
                                                                            <span
                                                                                class="apsc-count"></span><span
                                                                                class="apsc-media-type">Followers</span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="apsc-each-profile">

                                                                    <a class="apsc-dribble-icon clearfix"
                                                                       href="https://dribbble.com/"
                                                                       target="_blank">
                                                                        <div
                                                                            class="apsc-inner-block">
                                                                                                <span
                                                                                                    class="social-icon"><i
                                                                                                        class="apsc-dribbble fab fa-dribbble"></i><span
                                                                                                        class="media-name">dribble</span></span>
                                                                            <span
                                                                                class="apsc-count"></span><span
                                                                                class="apsc-media-type">Followers</span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-97cddec elementor-widget elementor-widget-image"
                                                        data-id="97cddec" data-element_type="widget"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-image">
                                                                <img loading="lazy" width="350"
                                                                     height="364"
                                                                     src="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/10/figure5.jpg"
                                                                     class="attachment-large size-large"
                                                                     alt=""
                                                                     srcset="https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/10/figure5.jpg 350w, https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/uploads/2019/10/figure5-288x300.jpg 288w"
                                                                     sizes="(max-width: 350px) 100vw, 350px">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-c5d7e7f element-sidebar-title elementor-widget elementor-widget-wp-widget-categories"
                                                        data-id="c5d7e7f" data-element_type="widget"
                                                        data-widget_type="wp-widget-categories.default">
                                                        <div class="elementor-widget-container">
                                                            <h3>Recipe Categories</h3>
                                                            <ul>
                                                                <li class="cat-item cat-item-27"><a
                                                                        href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/breakfast/">Breakfast</a>
                                                                    (3)
                                                                </li>
                                                                <li class="cat-item cat-item-22"><a
                                                                        href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/dinner/">Dinner</a>
                                                                    (4)
                                                                </li>
                                                                <li class="cat-item cat-item-29"><a
                                                                        href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/drink/">Drink</a>
                                                                    (3)
                                                                </li>
                                                                <li class="cat-item cat-item-38"><a
                                                                        href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/lunch/">Lunch</a>
                                                                    (2)
                                                                </li>
                                                                <li class="cat-item cat-item-77"><a
                                                                        href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/pasta/">Pasta</a>
                                                                    (1)
                                                                </li>
                                                                <li class="cat-item cat-item-78"><a
                                                                        href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/pizza/">Pizza</a>
                                                                    (1)
                                                                </li>
                                                                <li class="cat-item cat-item-76"><a
                                                                        href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/rezala/">Rezala</a>
                                                                    (3)
                                                                </li>
                                                                <li class="cat-item cat-item-21"><a
                                                                        href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/salad/">Salad</a>
                                                                    (3)
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="elementor-element elementor-element-599c9a1 element-sidebar-title elementor-widget elementor-widget-wp-widget-mc4wp_form_widget"
                                                        data-id="599c9a1" data-element_type="widget"
                                                        data-widget_type="wp-widget-mc4wp_form_widget.default">
                                                        <div class="elementor-widget-container">
                                                            <form id="mc4wp-form-1"
                                                                  class="mc4wp-form mc4wp-form-125"
                                                                  method="post" data-id="125"
                                                                  data-name="GET LATEST UPDATES">
                                                                <div class="mc4wp-form-fields">
                                                                    <div
                                                                        class="widget-newsletter-subscribe">
                                                                        <div class="original">
                                                                            <h3>Get Lastest
                                                                                Updates</h3>
                                                                            <p>Newsletter
                                                                                Subscribe</p>
                                                                            <div class="form-group">
                                                                                <input type="email"
                                                                                       placeholder="your e-mail address"
                                                                                       class="form-control"
                                                                                       name="email"
                                                                                       data-error="E-mail field is required"
                                                                                       required="">
                                                                            </div>
                                                                            <div
                                                                                class="form-group mb-none">
                                                                                <button
                                                                                    type="submit"
                                                                                    class="item-btn">
                                                                                    SUBSCRIBE
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="original-2">
                                                                            <input type="email"
                                                                                   placeholder="your e-mail address"
                                                                                   class="form-control"
                                                                                   name="email"
                                                                                   data-error="E-mail field is required"
                                                                                   required="">
                                                                            <button type="submit"
                                                                                    class="item-btn">
                                                                                SUBSCRIBE
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
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
@endsection

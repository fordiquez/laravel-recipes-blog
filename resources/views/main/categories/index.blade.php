@extends('layouts.main')

@section('content')
    <div id="content" class="site-content">
        <div class="entry-banner"
             style="background:url(https://radiustheme.com/demo/wordpress/themes/ranna/wp-content/themes/ranna/assets/img/banner.jpg) no-repeat scroll center center / cover">
            <div class="container">
                <div class="entry-banner-content">
                    <h1 class="entry-title">Categories</h1>
                    <div class="breadcrumb-area">
                        <div class="entry-breadcrumb">
                            <span property="itemListElement" class=" 1 breadcrumb-first" typeof="ListItem">
                                <a href="https://radiustheme.com/demo/wordpress/themes/ranna/">
                                    <span class="fa fa-home" aria-hidden="true"></span>Home
                                </a>
                            </span>
                            <em class="delimiter"><i class="fa fa-angle-right" aria-hidden="true"></i></em>
                            <span><span class="current">Categories</span></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="primary" class="content-area">
            <div class="container">
                <div class="row gutters-60">
                    <div class="col-sm-12 col-12">
                        <main id="main" class="site-main">
                            <article id="post-252" class="post-252 page type-page status-publish hentry">
                                <div class="entry-content">
                                    <div data-elementor-type="wp-post" data-elementor-id="252"
                                         class="elementor elementor-252">
                                        <div class="elementor-inner">
                                            <div class="elementor-section-wrap">
                                                <section class="elementor-section elementor-element">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-widget">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="row">
                                                                                    @foreach($categories as $category)
                                                                                        <div class="ranna-recipe-category col-xl-3 col-lg-4 col-sm-6 col-12 left">
                                                                                            <div class="category-box-layout1">
                                                                                                <figure class="item-figure">
                                                                                                    <a class="over-link" href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/dinner/"></a>
                                                                                                    <a href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/dinner/">
                                                                                                        <img src="{{ $category->getPhoto() }}" class="attachment-ranna-size14 size-ranna-size14" alt="{{ $category->title }}" title="{{ $category->title }}" loading="lazy">
                                                                                                    </a>
                                                                                                </figure>
                                                                                                <div class="item-content">
                                                                                                    <h3 class="item-title">
                                                                                                        <a href="https://radiustheme.com/demo/wordpress/themes/ranna/ranna_recipe_category/dinner/">{{ $category->title }}</a>
                                                                                                    </h3>
                                                                                                    <span class="sub-title">{{ $category->recipes()->count() }} Recipes</span>
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
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

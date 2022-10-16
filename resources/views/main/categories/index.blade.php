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
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-widget">
                                                        <div class="elementor-widget-container">
                                                            <div class="row">
                                                                @foreach($categories as $category)
                                                                    <div class="ranna-recipe-category col-xl-3 col-lg-4 col-sm-6">
                                                                        <div class="category-box-layout1">
                                                                            <figure class="item-figure">
                                                                                <a class="over-link" href="{{ route('main.recipes.index', ['category_id' => [0 => $category->id]]) }}"></a>
                                                                                <img src="{{ asset($category->getPhoto()) }}" alt="{{ $category->title }}" title="{{ $category->title }}">
                                                                            </figure>
                                                                            <div class="item-content">
                                                                                <h3 class="item-title">{{ $category->title }}</h3>
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
@endsection

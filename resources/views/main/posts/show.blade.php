@extends('layouts.main')

@section('breadcrumb')
    <x-main.breadcrumb title="{{ $post->title }}"></x-main.breadcrumb>
@endsection

@section('content')
    <div class="col-lg-8 col-md-12 col-12">
        <main id="main" class="site-main">
            <div class="post has-post-thumbnail">
                <div class="entry-header">
                    <div class="entry-thumbnail-area">
                        <img src="{{ asset($post->getPhoto()) }}" alt="{{ $post->title }}" title="{{ $post->title }}">
                    </div>
                    <div class="entry-meta">
                        <ul class="post-light">
                            <li>
                                <i class="fa-solid fa-calendar-days"></i>
                                {{ $post->getCreatedAtDate() }}
                            </li>
                            <li>
                                <i class="fa-solid fa-user"></i>
                                <a href="{{ route('main.authors.show', str()->slug($recipe->user->getFullName())) }}" title="Posts by {{ $post->user->getFullName() }}">
                                    {{ $post->user->getFullName() }}
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                {{ rand(0, 100) }}
                            </li>
                            <li>
                                <span class="meta-views meta-item ">
                                    <span class="meta-views meta-item high">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        {{ rand(100, 1000) }}
                                    </span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="entry-content">
                    <div class="elementor">
                        <div class="elementor-inner">
                            <div class="elementor-section-wrap">
                                <section class="elementor-section elementor-top-section elementor-element">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-element">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-widget">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-text-editor elementor-clearfix">
                                                                    {!! $post->content !!}
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
                <div class="entry-footer">
                    <div class="entry-footer-meta">
                        <div class="item-tags">
                            <span><i class="fa fa-bookmark" aria-hidden="true"></i></span>
                            <a href="#" rel="tag">Blog</a>,
                            <a href="#" rel="tag">Food</a>,
                            <a href="#" rel="tag">Nice</a>
                        </div>
                    </div>
                </div>

                <!-- author bio -->
                <div class="media about-author">
                    <div class="pull-left">
                        <img src="{{ asset($post->user->getPhoto()) }}" class="avatar" width="105" alt="{{ $post->user->getFullName() }}" title="{{ $post->user->getFullName() }}">
                    </div>
                    <div class="media-body">
                        <div class="about-author-info">
                            <h3 class="author-title">{{ $post->user->getFullName() }}</h3>
                            <div class="author-designation">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, voluptates!</div>
                        </div>
                    </div>
                </div>
                <!-- next/prev post -->
                <div class="row no-gutters divider post-navigation">
                    <div class="col-6 d-flex text-left">
                        @if($previousPost)
                            <a class="left-img" href="{{ route('main.posts.show', $previousPost->slug) }}">
                                <img src="{{ asset($previousPost->getPhoto()) }}" width="150" height="150" class="wp-post-image" alt="{{ $previousPost->title }}" title="{{ $previousPost->title }}">
                            </a>
                            <div class="pad-lr-15">
                                <span class="next-article">
                                    <a href="{{ route('main.posts.show', $previousPost->slug) }}" title="Previous post">
                                        Previous post
                                    </a>
                                </span>
                                <h3 class="post-nav-title">
                                    <a href="{{ route('main.posts.show', $previousPost->slug) }}" title="Previous post">
                                        {{ $previousPost->title }}
                                    </a>
                                </h3>
                            </div>
                        @endif
                    </div>

                    <div class="col-6 d-flex justify-content-end text-end text-right">
                        @if($nextPost)
                            <div class="pad-lr-15">
                            <span class="next-article">
                                <a href="{{ route('main.posts.show', $nextPost->slug) }}" title="Next post">
                                    <span>Next post</span>
                                </a>
                            </span>
                                <h3 class="post-nav-title">
                                    <a href="{{ route('main.posts.show', $nextPost->slug) }}" title="Next post">
                                        <span>{{ $nextPost->title }}</span>
                                    </a>
                                </h3>
                            </div>
                            <a class="right-img" href="{{ route('main.posts.show', $nextPost->slug) }}" title="Next post">
                                <img src="{{ asset($nextPost->getPhoto()) }}" width="150" height="150" class="wp-post-image" alt="{{ $nextPost->title }}" title="{{ $nextPost->title }}">
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div class="col-lg-4 col-md-12">
        <x-main.sidebar></x-main.sidebar>
    </div>
@endsection

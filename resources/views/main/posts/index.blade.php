@extends('layouts.main')

@section('breadcrumb')
    <x-main.breadcrumb title="Posts"></x-main.breadcrumb>
@endsection

@section('content')
    <div class="col-lg-8 col-md-12 col-12">
        <main id="main" class="site-main">
            <div class="blog-layout-1 row gutters-40">
                @foreach($posts as $post)
                    <div class="col-sm-6 rt-grid-item blog-layout-1 post has-post-thumbnail">
                        <div class="blog-box">
                            <div class="blog-img-holder">
                                <div class="blog-img">
                                    <a href="{{ route('main.posts.show', $post->slug) }}">
                                        <img src="{{ asset($post->getPhoto()) }}" alt="{{ $post->title }}" title="{{ $post->title }}">
                                    </a>
                                </div>
                            </div>
                            <div class="entry-content">
                                <ul>
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
                                </ul>
                                <h3 class="text-center">
                                    <a href="{{ route('main.posts.show', $post->slug) }}">
                                        {{ $post->title }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $posts->links('pagination.main') }}
        </main>
    </div>
    <div class="col-lg-4 col-md-12 col-12">
        <x-main.sidebar></x-main.sidebar>
    </div>
@endsection

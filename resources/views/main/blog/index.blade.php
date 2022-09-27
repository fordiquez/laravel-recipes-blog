@extends('layouts.main')

@section('content')
    @include('main.components.inner-page-banner')
    <section class="blog-grid-page-wrap padding-top-80 padding-bottom-50">
        <div class="container">
            <div class="row gutters-60">
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-sm-6 col-12">
                                <div class="blog-box-layout1">
                                    <div class="item-figure">
                                        <a href="{{ route('main.blog.show', $post) }}">
                                            <img src="{{ url('storage/' . $post->preview_image) }}" alt="Blog">
                                        </a>
                                    </div>
                                    <div class="item-content">
                                        <ul class="entry-meta">
                                            <li><a href="#"><i class="fas fa-clock"></i>{{ $post->created_at }}</a></li>
                                            <li><a href="#"><i class="fas fa-user"></i>by <span>John Martin</span></a></li>
                                        </ul>
                                        <h3 class="item-title">
                                            <a href="{{ route('main.blog.show', $post) }}">{{ $post->title }}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <ul class="pagination-layout1">
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                    </ul>
                </div>
                @include('main.components.sidebar-widgets')
            </div>
        </div>
    </section>
@endsection

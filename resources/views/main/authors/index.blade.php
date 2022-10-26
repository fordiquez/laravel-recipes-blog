@extends('layouts.main')

@section('breadcrumb')
    <x-main.breadcrumb title="Authors"></x-main.breadcrumb>
@endsection

@section('content')
    <div class="col-sm-12 col-12">
        <main id="main" class="site-main">
            <article class="page">
                <div class="entry-content">
                    <div class="elementor">
                        <div class="elementor-inner">
                            <div class="elementor-section-wrap">
                                <section class="elementor-section elementor-top-section elementor-element elementor-section-stretched">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-66 elementor-element">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-widget">
                                                            <div class="elementor-widget-container">
                                                                <div class="author-box-layout1">
                                                                    <div class="adv-search-wrap">
                                                                        <form action="{{ route('main.authors.index') }}">
                                                                            <div class="input-group">
                                                                                <input type="search" name="full_name" class="form-control" value="{{ old('full_name', request()->query('full_name')) }}" placeholder="Enter author name">
                                                                                <div class="btn-group">
                                                                                    <div class="input-group-btn">
                                                                                        <button type="submit" class="btn-search">
                                                                                            <i class="fa-solid fa-magnifying-glass"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                    <h3 class="author-section-title">Our Valuable Authors</h3>

                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped">
                                                                            <tbody class="searched-auhor-holder">
                                                                            @foreach($authors as $author)
                                                                                <tr class="author-row">
                                                                                    <th>
                                                                                        <div class="author-personal-info">
                                                                                            <a href="{{ route('main.authors.show', str()->slug($author->getFullName())) }}" class="item-figure">
                                                                                                <img src="{{ asset($author->getPhoto()) }}" width="150" height="150" class="avatar" alt="{{ $author->getFullName() }}" title="{{ $author->getFullName() }}">
                                                                                            </a>
                                                                                            <div class="item-content">
                                                                                                <div class="item-title">
                                                                                                    <a href="{{ route('main.authors.show', str()->slug($author->getFullName())) }}">
                                                                                                        {{ $author->getFullName() }}
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </th>
                                                                                    <td>
                                                                                        <div class="author-social-info">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="{{ route('main.recipes.index', ['user_id' => [0 => $author->id]]) }}" title="Recipes list by {{ $author->getFullName() }}">
                                                                                                        <h4 class="item-title">Recipes</h4>
                                                                                                        <span class="item-number">{{ $author->recipes_count }}</span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <div>
                                                                                                        <h4 class="item-title">Posts</h4>
                                                                                                        <span class="item-number">{{ $author->posts_count }}</span>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <div>
                                                                                                        <h4 class="item-title">Favourite</h4>
                                                                                                        <span class="item-number">{{ $author->likes_count }}</span>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                        {{ $authors->links('pagination.main') }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-column elementor-col-33 elementor-element">
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
    </div>
@endsection

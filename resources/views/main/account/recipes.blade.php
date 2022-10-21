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
                        <div class="listing-box-list">
                            @foreach($recipes as $recipe)
                                <div class="product-box">
                                    <div class="item-img">
                                        <a href="{{ route('main.recipes.show', $recipe->slug) }}">
                                            <img class="wp-post-image" src="{{ asset($recipe->getPhoto()) }}" alt="{{ $recipe->title }}" title="{{ $recipe->title }}">
                                        </a>
                                        <div @class(['post-status', 'draft' => !$recipe->published, 'publish' => $recipe->published])>
                                            <span>{{ $recipe->published ? 'Published' : 'Not published' }}</span>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <h3 class="item-title">
                                            <a href="{{ route('main.recipes.show', $recipe->slug) }}">
                                                {{ $recipe->title }}
                                            </a>
                                        </h3>
                                        <ul class="meta-item">
                                            <li class="item-btn">
                                                <a href="{{ route('main.recipes.edit', $recipe->slug) }}" class="btn-fill">Edit</a>
                                            </li>
                                            <li class="item-btn">
                                                <form action="{{ route('main.recipes.destroy', $recipe) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn-fill">Delete</button>
                                                </form>
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
    </section>
@endsection

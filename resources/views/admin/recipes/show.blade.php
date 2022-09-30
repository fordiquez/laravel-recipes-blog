@extends('layouts.argon')

@section('title', 'Admin – Recipes – ' . $recipe->title)

@section('content')
    <div class="mx-3 mx-lg-5 my-7">
        <div class="card card-profile">
            <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.recipes.index') }}" class="btn btn-sm btn-primary mb-0 d-flex align-items-center">
                        <i class="fa-solid fa-table-list"></i>
                        <span class="ms-1 d-none d-sm-inline-block">Recipes</span>
                    </a>
                    <a href="{{ route('admin.recipes.edit', $recipe) }}" class="btn btn-sm btn-success mb-0 d-flex align-items-center">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <span class="ms-1 d-none d-sm-inline-block">Edit</span>
                    </a>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="mt-2">
                    <h5 class="text-center">{{ $recipe->title }}</h5>
                    <hr class="horizontal dark">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    Created: <span class="badge bg-gradient-primary ms-1">{{ $recipe->created_at }}</span>
                                </div>
                                <a href="{{ route('admin.cuisines.show', $recipe->cuisine) }}" class="btn bg-gradient-danger btn-xs text-uppercase">
                                    {{ $recipe->cuisine->title }}
                                </a>
                                <div class="d-flex align-items-center">
                                    Updated: <span class="badge bg-gradient-success ms-1">{{ $recipe->updated_at }}</span>
                                </div>
                            </div>
                            <img src="{{ asset($recipe->getPhoto($recipe)) }}" alt="{{ $recipe->title }}" title="{{ $recipe->title }}"
                                 class="img-fluid border border-2 border-white mt-3">
                            <div class="d-flex justify-content-center mt-3">
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-inline-item d-flex flex-column align-items-center">
                                        <i class="fa-solid fa-clock-rotate-left"></i>
                                        <h6 class="mt-2 text-uppercase">Cooking time</h6>
                                        <div>
                                            <span class="fw-light">{{ $recipe->cooking_time }}</span>
                                        </div>
                                    </li>
                                    <li class="list-inline-item d-flex flex-column align-items-center mx-lg-5 mx-2">
                                        <i class="fa-solid fa-plate-wheat"></i>
                                        <h6 class="mt-2 text-uppercase">Servings</h6>
                                        <div>
                                            <span class="fw-light">{{ $recipe->servings }}</span>
                                        </div>
                                    </li>
                                    <li class="list-inline-item d-flex flex-column align-items-center">
                                        <i class="fa-regular fa-star"></i>
                                        <h6 class="mt-2 text-uppercase">Difficulty</h6>
                                        <div>
                                            <span class="fw-light">{{ $recipe->level }}</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="text-left">{!! $recipe->description !!}</div>
                </div>
            </div>
        </div>
    </div>
@endsection

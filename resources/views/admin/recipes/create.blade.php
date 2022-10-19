@extends('layouts.admin')

@section('title', 'Admin – Recipes – Create')

@pushonce('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
@endpushonce

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.recipes.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Create Recipe</p>
                                <a href="{{ route('admin.recipes.index') }}" class="btn btn-primary btn-sm ms-auto mb-0">
                                    <i class="fa-solid fa-table-list"></i>
                                    <span class="ms-1 d-none d-sm-inline-block">Recipes</span>
                                </a>
                                <button class="btn btn-success btn-sm ms-2 mb-0" type="submit">
                                    <i class="fa-solid fa-check"></i>
                                    <span class="ms-1 d-none d-sm-inline-block">Create</span>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Recipe Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title" class="form-control-label">Title</label>
                                    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Recipe title">
                                    @error('title')
                                        <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                @if(count($cuisines))
                                    <div class="col-md-6">
                                        <label for="cuisine_id">Cuisine</label>
                                        <select class="form-control @error('cuisine_id') is-invalid @enderror" id="cuisine_id" name="cuisine_id">
                                            <option disabled selected>Select the cuisine</option>
                                            @foreach($cuisines as $cuisine)
                                                <option @selected(old('cuisine_id') == $cuisine->id) value="{{ $cuisine->id }}">{{ $cuisine->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('cuisine_id')
                                            <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                        @enderror
                                    </div>
                                @endif
                                @if(count($users))
                                    <div class="col-md-6">
                                        <label for="user_id">User</label>
                                        <select class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id">
                                            <option disabled selected>Select the user</option>
                                            @foreach($users as $user)
                                                <option @selected(old('user_id') == $user->id) value="{{ $user->id }}">{{ $user->getFullName() }}</option>
                                            @endforeach
                                        </select>
                                        @error('user_id')
                                        <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                        @enderror
                                    </div>
                                @endif
                                <div class="col-md-6">
                                    <label for="cooking_time" class="form-control-label">Cooking time</label>
                                    <input class="form-control @error('cooking_time') is-invalid @enderror" type="text" name="cooking_time" id="cooking_time" value="{{ old('cooking_time') }}" placeholder="Recipe cooking time">
                                    @error('cooking_time')
                                        <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="servings" class="form-control-label">Servings</label>
                                    <input class="form-control @error('servings') is-invalid @enderror" type="text" name="servings" id="servings" value="{{ old('servings') }}" placeholder="Recipe servings">
                                    @error('servings')
                                        <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="example-text-input" class="form-control-label">Level</label>
                                    <div>
                                        @foreach($levels as $key => $level)
                                            <div class="form-check form-check-inline">
                                                <label class="custom-control-label" for="{{ $key }}">{{ $level }}</label>
                                                <input class="form-check-input" type="radio" name="level" id="{{ $key }}" value="{{ $key }}" @checked($key == old('level'))>
                                            </div>
                                        @endforeach
                                    </div>
                                    @error('level')
                                        <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="categories">Categories</label>
                                    <select class="form-control select2" id="categories" name="categories[]" multiple="multiple" data-placeholder="Choose one or more category">
                                        @foreach($categories as $category)
                                            <option @selected(is_array(old('categories')) && in_array($category->id, old('categories'))) value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="tags">Tags</label>
                                    <select class="form-control select2" id="tags" name="tags[]" multiple="multiple" data-placeholder="Choose tag(s)">
                                        @foreach($tags as $tag)
                                            <option @selected(is_array(old('tags')) && in_array($tag->id, old('tags'))) value="{{ $tag->id }}">{{ $tag->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label for="description" class="form-control-label">Description</label>
                                    <textarea id="description" name="description">{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="card card-plain">
                                        <div class="position-relative">
                                            <img src="{{ asset('assets/images/image-not-found.svg') }}" class="shadow border-radius-lg w-sm-50" id="photo-preview" alt="Recipe photo" title="Recipe photo">
                                        </div>
                                        <div class="card-body px-1 pt-3">
                                            <label class="form-label" for="photo">Photo</label>
                                            <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" id="photo" accept="image/*">
                                            @error('photo')
                                            <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@pushonce('scripts')
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/select2.js') }}"></script>
    <script src="{{ asset('assets/js/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/photo-preview.js') }}"></script>
@endpushonce

@extends('layouts.admin')

@section('title', 'Admin – Recipes – Create')

@pushonce('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
    <style>
        .ck-editor__editable[role="textbox"] {
            min-height: 200px;
        }
    </style>
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
                                    <div class="form-group @error('title') mb-0 @enderror">
                                        <label for="title" class="form-control-label">Title</label>
                                        <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Recipe title">
                                    </div>
                                    @error('title')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                @if(count($cuisines))
                                    <div class="col-md-6">
                                        <div class="form-group @error('cuisine_id') mb-0 @enderror">
                                            <label for="cuisine_id">Cuisine</label>
                                            <select class="form-control @error('cuisine_id') is-invalid @enderror" id="cuisine_id" name="cuisine_id">
                                                <option disabled selected>Select the cuisine</option>
                                                @foreach($cuisines as $cuisine)
                                                    <option @selected(old('cuisine_id') == $cuisine->id) value="{{ $cuisine->id }}">{{ $cuisine->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('cuisine_id')
                                        <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                        @enderror
                                    </div>
                                @endif
                                <div class="col-md-6">
                                    <div class="form-group @error('cooking_time') mb-0 @enderror">
                                        <label for="cooking_time" class="form-control-label">Cooking time</label>
                                        <input class="form-control @error('cooking_time') is-invalid @enderror" type="text" name="cooking_time" id="cooking_time" value="{{ old('cooking_time') }}" placeholder="Recipe cooking time">
                                    </div>
                                    @error('cooking_time')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('servings') mb-0 @enderror">
                                        <label for="servings" class="form-control-label">Servings</label>
                                        <input class="form-control @error('servings') is-invalid @enderror" type="text" name="servings" id="servings" value="{{ old('servings') }}" placeholder="Recipe servings">
                                    </div>
                                    @error('servings')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('level') mb-0 @enderror">
                                        <label for="example-text-input" class="form-control-label">Level</label>
                                        <div>
                                            @foreach($levels as $key => $level)
                                                <div class="form-check form-check-inline">
                                                    <label class="custom-control-label" for="{{ $key }}">{{ $level }}</label>
                                                    <input class="form-check-input" type="radio" name="level" id="{{ $key }}" value="{{ $key }}" @checked($key == old('level'))>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @error('level')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('photo') mb-0 @enderror">
                                        <label class="form-label" for="photo">Photo</label>
                                        <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" id="photo" accept="image/*">
                                    </div>
                                    @error('photo')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="categories">Categories</label>
                                        <select class="form-control select2" id="categories" name="categories[]" multiple="multiple" data-placeholder="Choose one or more category">
                                            @foreach($categories as $category)
                                                <option @selected(is_array(old('categories')) && in_array($category->id, old('categories'))) value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tags">Tags</label>
                                        <select class="form-control select2" id="tags" name="tags[]" multiple="multiple" data-placeholder="Choose tag(s)">
                                            @foreach($tags as $tag)
                                                <option @selected(is_array(old('tags')) && in_array($tag->id, old('tags'))) value="{{ $tag->id }}">{{ $tag->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group @error('description') mb-0 @enderror">
                                        <label for="description" class="form-control-label">Description</label>
                                        <textarea id="description" name="description">{{ old('description') }}</textarea>
                                    </div>
                                    @error('description')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
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
    <script src="{{ asset('assets/js/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ckeditor.js') }}"></script>
@endpushonce

@extends('layouts.admin')

@section('title', 'Admin – Recipes – ' . $recipe->title . ' – Edit')

@pushonce('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpushonce

@section('content')
    <div class="card shadow-lg mx-4 card-profile-bottom">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="{{ asset($recipe->getPhoto($recipe)) }}" class="w-100 border-radius-lg shadow-sm"
                             alt="{{ $recipe->title }}" title="{{ $recipe->title }}">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">{{ $recipe->title }}</h5>
                        <p class="mb-0 font-weight-bold text-sm">{{ $recipe->title }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.recipes.update', $recipe) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Edit Recipe</p>
                                <a href="{{ route('admin.recipes.index') }}" class="btn btn-primary btn-sm ms-auto mb-0">
                                    <i class="fa-solid fa-table-list"></i>
                                    <span class="ms-1">Recipes</span>
                                </a>
                                <button class="btn btn-success btn-sm ms-2 mb-0" type="submit">
                                    <i class="fa-solid fa-user-check"></i>
                                    <span class="ms-1">Update</span>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Recipe Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group @error('title') mb-0 @enderror">
                                        <label for="title" class="form-control-label">Title</label>
                                        <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title', $recipe->title) }}" placeholder="Recipe title">
                                    </div>
                                    @error('title')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('cuisine_id') mb-0 @enderror">
                                        <label for="cuisine_id">Cuisine</label>
                                        <select class="form-control @error('cuisine_id') is-invalid @enderror" id="cuisine_id" name="cuisine_id">
                                            <option disabled selected>Select the cuisine</option>
                                            @foreach($cuisines as $cuisine)
                                                <option @selected(old('cuisine_id', $recipe->cuisine_id) == $cuisine->id) value="{{ $cuisine->id }}">{{ $cuisine->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('cuisine_id')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('cooking_time') mb-0 @enderror">
                                        <label for="cooking_time" class="form-control-label">Cooking time</label>
                                        <input class="form-control @error('cooking_time') is-invalid @enderror" type="text" name="cooking_time" id="cooking_time" value="{{ old('cooking_time', $recipe->cooking_time) }}" placeholder="Recipe cooking time">
                                    </div>
                                    @error('cooking_time')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('servings') mb-0 @enderror">
                                        <label for="servings" class="form-control-label">Servings</label>
                                        <input class="form-control @error('servings') is-invalid @enderror" type="text" name="servings" id="servings" value="{{ old('servings', $recipe->servings) }}" placeholder="Recipe servings">
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
                                                    <input class="form-check-input" type="radio" name="level" id="{{ $key }}" value="{{ $key }}" @checked($key == old('level', $recipe->level))>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @error('level')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-8 col-md-6 col-lg-4">
                                    <div class="form-group @error('photo') mb-0 @enderror">
                                        <label class="form-label" for="photo">Photo</label>
                                        <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" id="photo" accept="image/*">
                                    </div>
                                    @error('photo')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('categories') mb-0 @enderror">
                                        <label for="categories" class="form-control-label">Categories</label>
                                        <select class="form-control select2 @error('categories') is-invalid @enderror" id="categories" name="categories[]" multiple="multiple" data-placeholder="Choose one or more category">
                                            @foreach($categories as $category)
                                                <option
                                                    @selected(is_array($recipe->categories->pluck('id')->toArray()) && in_array($category->id, $recipe->categories->pluck('id')->toArray()))
                                                    value="{{ $category->id }}"
                                                >
                                                    {{ $category->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('categories')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('tags') mb-0 @enderror">
                                        <label for="tags" class="form-control-label">Tags</label>
                                        <select class="form-control select2 @error('tags') is-invalid @enderror" id="tags" name="tags[]" multiple="multiple" data-placeholder="Choose one or more category">
                                            @foreach($tags as $tag)
                                                <option
                                                    @selected(is_array($recipe->tags->pluck('id')->toArray()) && in_array($tag->id, $recipe->tags->pluck('id')->toArray()))
                                                    value="{{ $tag->id }}"
                                                >
                                                    {{ $tag->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('tags')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <div class="form-group @error('description') mb-0 @enderror">
                                        <label for="description" class="form-control-label">Content</label>
                                        <textarea id="description" name="description">{{ old('description', $recipe->description) }}</textarea>
                                    </div>
                                    @error('description')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">Additional Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="created_at" class="form-control-label">Created at</label>
                                        <input class="form-control" type="text" name="created_at" id="created_at" value="{{ old('created_at', $recipe->created_at) }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="updated_at" class="form-control-label">Updated at</label>
                                        <input class="form-control" type="text" name="updated_at" id="updated_at" value="{{ old('updated_at', $recipe->updated_at) }}" disabled>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                width: '100%'
            });
        });
        ClassicEditor.create(document.querySelector('#description')).catch(error => console.log(error));
    </script>
@endpushonce

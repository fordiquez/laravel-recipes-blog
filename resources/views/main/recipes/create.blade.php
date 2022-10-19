@extends('layouts.main')

@pushonce('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
@endpushonce

@section('breadcrumb')
    <x-main.breadcrumb title="Submit recipe"></x-main.breadcrumb>
@endsection

@section('content')
    <div class="col-lg-8 col-12">
        <main id="main" class="site-main">
            <form class="submit-recipe-form" action="{{ route('main.recipes.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-12 form-group">
                    <label for="title" class="form-control-label">Title</label>
                    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Recipe title">
                    @error('title')
                        <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
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

                <div class="form-group">
                    <label for="categories">Categories</label>
                    <select class="form-control select2" id="categories" name="categories[]" multiple="multiple" data-placeholder="Choose one or more category">
                        @foreach($categories as $category)
                            <option @selected(is_array(old('categories')) && in_array($category->id, old('categories'))) value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="tags">Tags</label>
                    <select class="form-control select2" id="tags" name="tags[]" multiple="multiple" data-placeholder="Choose tag(s)">
                        @foreach($tags as $tag)
                            <option @selected(is_array(old('tags')) && in_array($tag->id, old('tags'))) value="{{ $tag->id }}">{{ $tag->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="description" class="form-control-label">Description</label>
                    <textarea id="description" name="description">{{ old('description') }}</textarea>
                    @error('description')
                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mt-3 form-group">
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

                <div class="additional-input-wrap">
                    <div class="form-group">
                        <label>Additional Informations:</label>
                        <div class="row gutters-5">
                            <div class="col-lg-6">
                                <div class="form-group additional-input-box icon-left">
                                    <label for="cooking_time"><i class="fa fa-cutlery"></i></label>
                                    <input type="text" class="form-control" id="cooking_time" name="cooking_time" value="{{ old('cooking_time') }}" placeholder="Cooking Time">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group additional-input-box icon-left">
                                    <label for="servings"><i class="fa fa-users"></i></label>
                                    <input type="number" class="form-control" id="servings" name="servings" value="{{ old('servings') }}" placeholder="People servings">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-3">
                    <label for="example-text-input" class="form-control-label">Recipe difficulty</label>
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

                <div class="additional-input-wrap">
                    <div class="form-group">
                        <label>Ingredients:</label>
                    </div>
                    <div class="rn-recipe-wrapper">
                        <div class="rn-recipe-wrap">
                            <div class="rn-recipe-item">
                                <div class="rn-ingredient-wrap" id="ingredient-wrap">
                                    <div class="rn-ingredient-item">
                                        <label for="ingredients[0]" class="me-2 ingredient-label">1.</label>
                                        <input type="text" class="form-control" id="ingredients[0]" name="ingredients[0]" placeholder="Ingredient title">
                                        <span class="text-danger ms-2 ingredient-remove" title="Remove ingredient" id="remove-ingredient">
                                            <i class="fa-solid fa-trash"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="rn-ingredient-actions">
                                    <button type="button" class="btn-upload btn-sm btn-primary" id="add-ingredient">
                                        <i class="fa-solid fa-cookie-bite"></i>
                                        <span>Add New Ingredient</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-start justify-content-between" id="steps">
                    <div class="nav flex-column nav-pills me-3" id="steps-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="step-1-tab" data-bs-toggle="pill" data-bs-target="#step-1" type="button" role="tab" aria-controls="step-1" aria-selected="true">
                            Step 1
                        </button>
                    </div>
                    <div class="tab-content" style="width: 85%" id="steps-content">
                        <div class="tab-pane fade show active" id="step-1" role="tabpanel" aria-labelledby="step-1-tab" tabindex="0">
                            <div class="step-description">
                                <label for="steps[0][description]">Description</label>
                                <textarea class="form-control" id="steps[0][description]" name="steps[0][description]" rows="5"></textarea>
                            </div>
                            <div class="step-photo">
                                <label class="form-label" for="steps[0][photo]">Photo</label>
                                <input class="form-control" type="file" id="steps[0][photo]" name="steps[0][photo]" accept="image/*">
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <button type="button" class="btn-upload btn-sm btn-primary" id="add-step">
                        <i class="fa-solid fa-circle-plus"></i>
                        <span>Add step</span>
                    </button>
                    <button type="button" class="btn-upload btn-sm btn-primary" id="remove-step">
                        <i class="fa-solid fa-trash-can"></i>
                        <span>Remove step</span>
                    </button>
                </div>

                <button type="submit" class="btn-submit">
                    <i class="fa-solid fa-circle-check"></i>
                    <span class="ms-1">Submit</span>
                </button>
            </form>

        </main>
    </div>
    <div class="col-lg-4 col-md-12">
        <x-main.sidebar></x-main.sidebar>
    </div>
@endsection

@pushonce('scripts')
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/select2.js') }}"></script>
    <script src="{{ asset('assets/js/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/photo-preview.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/recipe-main.js') }}"></script>
@endpushonce

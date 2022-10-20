@extends('layouts.main')

@pushonce('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
@endpushonce

@section('breadcrumb')
    <x-main.breadcrumb title="{{ $recipe->title }}"></x-main.breadcrumb>
@endsection

@section('content')
    <div class="col-lg-8 col-12">
        <main id="main" class="site-main">
            <form class="submit-recipe-form" action="{{ route('main.recipes.update', $recipe) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="col-12 form-group">
                    <label for="title" class="form-control-label">Title</label>
                    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title', $recipe->title) }}" placeholder="Recipe title">
                    @error('title')
                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="cuisine_id">Cuisine</label>
                    <select class="form-control @error('cuisine_id') is-invalid @enderror" id="cuisine_id" name="cuisine_id">
                        <option disabled selected>Select the cuisine</option>
                        @foreach($cuisines as $cuisine)
                            <option @selected(old('cuisine_id', $recipe->cuisine_id) == $cuisine->id) value="{{ $cuisine->id }}">{{ $cuisine->title }}</option>
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
                            <option
                                @selected(is_array($recipe->categories->pluck('id')->toArray()) && in_array($category->id, $recipe->categories->pluck('id')->toArray()))
                                value="{{ $category->id }}"
                            >
                                {{ $category->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('categories')
                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="tags">Tags</label>
                    <select class="form-control select2" id="tags" name="tags[]" multiple="multiple" data-placeholder="Choose tag(s)">
                        @foreach($tags as $tag)
                            <option
                                @selected(is_array($recipe->tags->pluck('id')->toArray()) && in_array($tag->id, $recipe->tags->pluck('id')->toArray()))
                                value="{{ $tag->id }}"
                            >
                                {{ $tag->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('tags')
                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description" class="form-control-label">Description</label>
                    <textarea id="description" name="description">{{ old('description', $recipe->description) }}</textarea>
                    @error('description')
                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <img src="{{ asset($recipe->getPhoto()) }}" class="shadow" style="border-radius: 2%" id="photo-preview" alt="Recipe photo" title="Recipe photo">
                </div>

                <div class="my-3">
                    <label class="form-label" for="photo">Photo</label>
                    <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" id="photo" accept="image/*">
                    @error('photo')
                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                <div class="additional-input-wrap">
                    <div class="form-group">
                        <label>Additional Information:</label>
                        <div class="row gutters-5">
                            <div class="col-lg-6">
                                <div class="form-group additional-input-box icon-left">
                                    <label for="cooking_time"><i class="fa fa-cutlery"></i></label>
                                    <input type="text" class="form-control" id="cooking_time" name="cooking_time" value="{{ old('cooking_time', $recipe->cooking_time) }}" placeholder="Cooking Time">
                                </div>
                                @error('cooking_time')
                                <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group additional-input-box icon-left">
                                    <label for="servings"><i class="fa fa-users"></i></label>
                                    <input type="number" class="form-control" id="servings" name="servings" value="{{ old('servings', $recipe->servings) }}" placeholder="People servings">
                                </div>
                                @error('servings')
                                <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                @enderror
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
                                <input class="form-check-input" type="radio" name="level" id="{{ $key }}" value="{{ $key }}" @checked($key == old('level', $recipe->level))>
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
                                <div class="rn-ingredient-wrap" id="ingredients">
                                    @foreach($recipe->ingredients as $ingredient)
                                        <div class="rn-ingredient-item">
                                            <label for="ingredients[{{ $loop->index }}]" class="me-2 ingredient-label">{{ $loop->iteration }}.</label>
                                            <input type="hidden" id="ingredient-id" name="ingredients[{{ $loop->index }}][id]" value="{{ $ingredient->id }}">
                                            <input type="text" class="form-control ingredient-title" id="ingredients[{{ $loop->index }}]" name="ingredients[{{ $loop->index }}][title]" value="{{ old('ingredients.' . $loop->index . '.title', $ingredient->title) }}" placeholder="Ingredient title">
                                            <span class="text-danger ms-2 ingredient-remove" title="Remove ingredient" id="remove-ingredient">
                                                <i class="fa-solid fa-trash"></i>
                                            </span>
                                        </div>
                                    @endforeach
                                </div>
                                @error('ingredients.*.title')
                                <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                @enderror
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

                <div>
                    <label>Steps:</label>
                    <div class="d-flex align-items-start justify-content-between" id="steps">
                        <div class="nav flex-column nav-pills me-3" id="steps-tab" role="tablist" aria-orientation="vertical">
                            @foreach($recipe->steps as $step)
                                <button @class(['nav-link', 'active' => $loop->first]) id="step-{{ $step->step }}-tab" data-bs-toggle="pill" data-bs-target="#step-{{ $step->step }}" type="button" role="tab" aria-controls="step-{{ $step->step }}" aria-selected="true">
                                    Step {{ $step->step }}
                                </button>
                            @endforeach
                        </div>
                        <div class="tab-content" style="width: 85%" id="steps-content">
                            @foreach($recipe->steps as $step)
                                <div @class(['tab-pane fade', 'show active' => $loop->first]) id="step-{{ $step->step }}" role="tabpanel" aria-labelledby="step-{{ $step->step }}-tab" tabindex="0">
                                    <input type="hidden" id="step-id" name="steps[{{ $loop->index }}][id]" value="{{ $step->id }}">
                                    <input type="hidden" id="step-step" name="steps[{{ $loop->index }}][step]" value="{{ $step->step }}">
                                    <div class="step-description">
                                        <label for="steps[{{ $loop->index }}][description]">Description</label>
                                        <textarea class="form-control" id="steps[{{ $loop->index }}][description]" name="steps[{{ $loop->index }}][description]" rows="5">{{ $step->description }}</textarea>
                                    </div>
                                    @if($step->getPhoto())
                                        <div class="mt-3">
                                            <img src="{{ asset($step->getPhoto()) }}" class="shadow" style="border-radius: 2%" alt="Step {{ $step->step }}" title="Step {{ $step->step }}">
                                        </div>
                                    @endif
                                    <div class="step-photo">
                                        <label class="form-label" for="steps[{{ $loop->index }}][photo]">Photo</label>
                                        <input class="form-control" type="file" id="steps[{{ $loop->index }}][photo]" name="steps[{{ $loop->index }}][photo]" accept="image/*">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    @error('steps.*.description')
                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                    @enderror
                    @error('steps.*.photo')
                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                    @enderror

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
                </div>

                <button type="submit" class="btn-submit">
                    <i class="fa-solid fa-circle-check"></i>
                    <span class="ms-1">Update</span>
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

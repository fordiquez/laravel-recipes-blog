@extends('layouts.admin')

@section('title', 'Admin – Recipes – ' . $recipe->title . ' – Edit')

@pushonce('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.min.css" />
    <style>
        .ck-editor__editable[role="textbox"] {
            min-height: 200px;
        }
    </style>
    <style>
        .ck-editor__editable[role="textbox"] {
            min-height: 200px;
        }
    </style>
@endpushonce

@section('content')
    <div class="card shadow-lg mx-4 card-profile-bottom">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="{{ asset($recipe->getPhoto()) }}" class="w-100 border-radius-lg shadow-sm"
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
                                    <label for="title" class="form-control-label">Title</label>
                                    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title', $recipe->title) }}" placeholder="Recipe title">
                                    @error('title')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
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
                                <div class="col-md-6">
                                    <label for="cuisine_id">User</label>
                                    <select class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id">
                                        <option disabled selected>Select the cuisine</option>
                                        @foreach($users as $user)
                                            <option @selected(old('user_id', $recipe->user_id) == $user->id) value="{{ $user->id }}">{{ $user->getFullName() }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="cooking_time" class="form-control-label">Cooking time</label>
                                    <input class="form-control @error('cooking_time') is-invalid @enderror" type="text" name="cooking_time" id="cooking_time" value="{{ old('cooking_time', $recipe->cooking_time) }}" placeholder="Recipe cooking time">
                                    @error('cooking_time')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="servings" class="form-control-label">Servings</label>
                                    <input class="form-control @error('servings') is-invalid @enderror" type="text" name="servings" id="servings" value="{{ old('servings', $recipe->servings) }}" placeholder="Recipe servings">
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
                                                <input class="form-check-input" type="radio" name="level" id="{{ $key }}" value="{{ $key }}" @checked($key == old('level', $recipe->level))>
                                            </div>
                                        @endforeach
                                    </div>
                                    @error('level')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
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
                                    @error('categories')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
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
                                    @error('tags')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <label for="description" class="form-control-label">Content</label>
                                    <textarea id="description" name="description">{{ old('description', $recipe->description) }}</textarea>
                                    @error('description')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="photo">Photo</label>
                                    <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" id="photo" accept="image/*" data-browse-on-zone-click="true">
                                    @error('photo')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">Ingredients information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="ingredient" class="form-control-label h6">Add ingredient</label>
                                    <div class="d-flex align-items-center">
                                        <input class="form-control" type="text" id="ingredient-input" placeholder="Enter the ingredient information">
                                        <button type="button" id="ingredient-submit" class="btn btn-outline-primary ms-2">Add</button>
                                    </div>
                                    <h6>Ingredients list</h6>
                                    <ol class="list-group list-group-numbered mt-3" id="ingredients">
                                        @foreach($recipe->ingredients as $ingredient)
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                    <div>{{ $ingredient->title }}</div>
                                                </div>
                                                <span class="badge bg-danger rounded-pill cursor-pointer" data-id="{{ $ingredient->id }}" id="remove-icon">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </span>
                                            </li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <div class="card-footer">
                            <p class="text-uppercase text-sm">Additional Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="created_at" class="form-control-label">Created at</label>
                                    <input class="form-control" type="text" name="created_at" id="created_at" value="{{ old('created_at', $recipe->created_at) }}" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="updated_at" class="form-control-label">Updated at</label>
                                    <input class="form-control" type="text" name="updated_at" id="updated_at" value="{{ old('updated_at', $recipe->updated_at) }}" disabled>
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
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/buffer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/filetype.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/piexif.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/fileinput.min.js"></script>
    <script>
        $("#photo").fileinput({ 'showUpload': false,  }).attr('name', 'photo');
    </script>
    <script>
        $(document).ready(function () {
            const ingredientsList = $('#ingredients');
            const ingredientInput = $('#ingredient-input');
            const _token = $('input[name="_token"]').attr('value');
            const recipe = {!! json_encode($recipe) !!};

            ingredientsList.on('click', '#remove-icon', function() {
                const removedItem = $(this);
                const id = removedItem.data('id');
                $.ajax({
                    url: "{{ url('/api/ingredients/') }}" + `/${id}`,
                    type: 'DELETE',
                    data: {
                        _token,
                        id,
                    },
                    success: function({ data }) {
                        console.log(data);
                        removedItem.parent().remove();
                    }
                });
            });

            $('#ingredient-submit').click(function(e) {
                e.preventDefault();
                const title = $(this).prevAll('#ingredient-input').val();

                $.ajax({
                    url: "{{ url('/api/ingredients') }}",
                    method: 'post',
                    data: {
                        _token,
                        recipe_id: recipe.id,
                        title,
                    },
                    success: function({ data }) {
                        console.log(data);
                        ingredientsList.append(`<li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                                <div>${data.title}</div>
                                            </div>
                                            <span class="badge bg-danger rounded-pill cursor-pointer" data-id="${data.id}" id="remove-icon">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </span>
                                        </li>`);

                        ingredientInput.val("");
                    }
                });
            });
        })
    </script>
@endpushonce

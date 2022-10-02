@extends('layouts.admin')

@section('title', 'Admin – Recipes – ' . $recipe->title . ' – Edit')

@pushonce('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
                            <p class="text-uppercase text-sm">Ingredients information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ingredient" class="form-control-label h6">Add ingredient</label>
                                        <div class="d-flex align-items-center">
                                            <input class="form-control" type="text" id="ingredient-input" placeholder="Enter the ingredient information">
                                            <button type="button" id="ingredient-submit" class="btn btn-outline-primary ms-2">Add</button>
                                        </div>
                                    </div>
                                    <h6>Ingredients list</h6>
                                    <ol class="list-group list-group-numbered mt-3" id="ingredients">
                                        @foreach($recipe->ingredients as $ingredient)
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                    <div>{{ $ingredient->title }}</div>
                                                </div>
                                                <span class="badge bg-danger rounded-pill cursor-pointer" id="remove-item">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </span>
                                            </li>
                                        @endforeach
                                    </ol>
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
{{--    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>--}}
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/super-build/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        CKEDITOR.ClassicEditor.create(document.getElementById("description"), {
            // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
            toolbar: {
                items: [
                    'exportPDF','exportWord', '|',
                    'findAndReplace', 'selectAll', '|',
                    'heading', '|',
                    'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                    'bulletedList', 'numberedList', 'todoList', '|',
                    'outdent', 'indent', '|',
                    'undo', 'redo',
                    '-',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                    'alignment', '|',
                    'link', 'blockQuote', 'insertTable', 'codeBlock', 'htmlEmbed', '|',
                    'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                    'textPartLanguage', '|',
                    'sourceEditing'
                ],
                shouldNotGroupWhenFull: true
            },
            // Changing the language of the interface requires loading the language file using the <script> tag.
            // language: 'es',
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                ]
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
            placeholder: 'Welcome to CKEditor 5!',
            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
            fontFamily: {
                options: [
                    'default',
                    'Arial, Helvetica, sans-serif',
                    'Courier New, Courier, monospace',
                    'Georgia, serif',
                    'Lucida Sans Unicode, Lucida Grande, sans-serif',
                    'Tahoma, Geneva, sans-serif',
                    'Times New Roman, Times, serif',
                    'Trebuchet MS, Helvetica, sans-serif',
                    'Verdana, Geneva, sans-serif'
                ],
                supportAllValues: true
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
            fontSize: {
                options: [ 10, 12, 14, 'default', 18, 20, 22 ],
                supportAllValues: true
            },
            // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
            // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
            htmlSupport: {
                allow: [
                    {
                        name: /.*/,
                        attributes: true,
                        classes: true,
                        styles: true
                    }
                ]
            },
            // Be careful with enabling previews
            // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
            htmlEmbed: {
                showPreviews: true
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
            link: {
                decorators: {
                    addTargetToExternalLinks: true,
                    defaultProtocol: 'https://',
                    toggleDownloadable: {
                        mode: 'manual',
                        label: 'Downloadable',
                        attributes: {
                            download: 'file'
                        }
                    }
                }
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
            mention: {
                feeds: [
                    {
                        marker: '@',
                        feed: [
                            '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                            '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                            '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                            '@sugar', '@sweet', '@topping', '@wafer'
                        ],
                        minimumCharacters: 1
                    }
                ]
            },
            // The "super-build" contains more premium features that require additional configuration, disable them below.
            // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
            removePlugins: [
                // These two are commercial, but you can try them out without registering to a trial.
                // 'ExportPdf',
                // 'ExportWord',
                'CKBox',
                'CKFinder',
                'EasyImage',
                // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                // Storing images as Base64 is usually a very bad idea.
                // Replace it on production website with other solutions:
                // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                // 'Base64UploadAdapter',
                'RealTimeCollaborativeComments',
                'RealTimeCollaborativeTrackChanges',
                'RealTimeCollaborativeRevisionHistory',
                'PresenceList',
                'Comments',
                'TrackChanges',
                'TrackChangesData',
                'RevisionHistory',
                'Pagination',
                'WProofreader',
                // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                // from a local file system (file://) - load this site via HTTP server if you enable MathType
                'MathType'
            ]
        })
        $(document).ready(function() {
            $('.select2').select2({
                width: '100%'
            });
        });
        $(document).ready(function () {
            const todoListItem = $('#ingredients');
            const todoListInput = $('#ingredient-input');
            $('#ingredient-submit').on("click", function(event) {
                event.preventDefault();

                const item = $(this).prevAll('#ingredient-input').val();

                if (item) {
                    todoListItem.append(`<li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                                <div>${item}</div>
                                            </div>
                                            <span class="badge bg-danger rounded-pill cursor-pointer" id="remove-item">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </span>
                                        </li>`);
                    todoListInput.val("");
                }

            });

            todoListItem.on('click', '#remove-item', function() {
                $(this).parent().remove();
            });
        })
    </script>
@endpushonce

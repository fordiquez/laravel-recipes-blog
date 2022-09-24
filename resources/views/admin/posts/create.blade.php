@extends('layouts.admin')

@pushonce('styles')
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
@endpushonce

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Post Creating</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Posts</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group col-12 col-md-6 col-xl-4 mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><strong>Title</strong></span>
                        </div>
                        <input type="text" name="title" value="{{ old('title') }}"
                               class="form-control @error('title') is-invalid @enderror" placeholder="Post title">
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    @if(count($categories))
                        <div class="input-group col-12 col-md-6 col-xl-4 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><strong>Category</strong></span>
                            </div>
                            <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                <option selected disabled>Choose the category</option>
                                @foreach($categories as $category)
                                    <option @selected(old('category_id') == $category->id) value="{{ $category->id }}">
                                        {{ $category->title }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    @endif
                    <div class="form-group col-12 col-md-6 col-xl-4">
                        <label>Tags</label>
                        <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Choose tag(s)" style="width: 100%">
                            @foreach($tags as $tag)
                                <option @selected(is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids'))) value="{{ $tag->id }}">{{ $tag->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea id="summernote" name="content">{{ old('content') }}</textarea>
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-12 col-md-6 col-xl-4 mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input @error('preview_image') is-invalid @enderror"
                                   id="previewImage" name="preview_image">
                            <label class="custom-file-label" for="previewImage">Choose preview image</label>
                            @error('preview_image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-12 col-md-6 col-xl-4 mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input @error('preview_image') is-invalid @enderror"
                                   id="previewImage" name="main_image">
                            <label class="custom-file-label" for="mainImage">Choose main image</label>
                            @error('main_image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div><!-- /.container-fluid -->
        </section><!-- /.content -->
    </div>
@endsection

@pushonce('scripts')
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#summernote').summernote({
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
        });
        $(function () {
            bsCustomFileInput.init();
        });
        $('.select2').select2();
    </script>
@endpushonce

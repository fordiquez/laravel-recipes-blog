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
                        <h1 class="m-0">Post Editing</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Posts</a></li>
                            <li class="breadcrumb-item active">{{ $post->title }}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <form action="{{ route('admin.post.update', $post) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="input-group col-12 col-md-6 col-xl-4 mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><strong>Title</strong></span>
                        </div>
                        <input type="text" name="title" value="{{ old('title', $post->title) }}"
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
                                    <option @selected($post->category_id == $category->id) value="{{ $category->id }}">
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
                        <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Choose tag(s)"
                                style="width: 100%">
                            @foreach($tags as $tag)
                                <option
                                    @selected(is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()))
                                    value="{{ $tag->id }}"
                                >
                                    {{ $tag->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea id="summernote" name="content">{{ $post->content }}</textarea>
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Post images</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                            <div id="accordion">
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h4 class="card-title w-100">
                                            <a class="d-block w-100 collapsed" data-toggle="collapse" href="#previewImage" aria-expanded="false">
                                                Preview image
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="previewImage" class="collapse" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <img src="{{ url('storage/' . $post->preview_image) }}" class="w-100 h-25" alt="Preview image" title="Preview image">
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h4 class="card-title w-100">
                                            <a class="d-block w-100 collapsed" data-toggle="collapse" href="#mainImage" aria-expanded="false">
                                                Main image
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="mainImage" class="collapse" data-parent="#accordion" style="">
                                        <div class="card-body">
                                            <img src="{{ url('storage/' . $post->main_image) }}" class="w-100 h-25" alt="Main image" title="Main image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
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
                            <input type="file" class="custom-file-input @error('main_image') is-invalid @enderror"
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
        </section>
        <!-- /.content -->
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

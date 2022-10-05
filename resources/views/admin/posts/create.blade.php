@extends('layouts.admin')

@section('title', 'Admin – Posts – Create')

@pushonce('styles')
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
                <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Create Post</p>
                                <a href="{{ route('admin.posts.index') }}" class="btn btn-primary btn-sm ms-auto mb-0">
                                    <i class="fa-solid fa-table-list"></i>
                                    <span class="ms-1 d-none d-sm-inline-block">Posts</span>
                                </a>
                                <button class="btn btn-success btn-sm ms-2 mb-0" type="submit">
                                    <i class="fa-solid fa-check"></i>
                                    <span class="ms-1 d-none d-sm-inline-block">Create</span>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Post Information</p>
                            <div class="row">
                                <div class="col-sm-8 col-md-6 col-lg-4">
                                    <div class="form-group @error('title') mb-0 @enderror">
                                        <label for="title" class="form-control-label">Title</label>
                                        <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Post title">
                                    </div>
                                    @error('title')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <div class="form-group @error('content') mb-0 @enderror">
                                        <label for="content" class="form-control-label">Content</label>
                                        <textarea id="content" name="content">{{ old('content') }}</textarea>
                                    </div>
                                    @error('content')
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
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@pushonce('scripts')
    <script src="{{ asset('assets/js/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ckeditor.js') }}"></script>
@endpushonce

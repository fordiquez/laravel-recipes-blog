@extends('layouts.admin')

@section('title', 'Admin – Cuisines – Create')

@pushonce('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.min.css" />
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
                <form action="{{ route('admin.cuisines.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Create Cuisine</p>
                                <a href="{{ route('admin.cuisines.index') }}" class="btn btn-primary btn-sm ms-auto mb-0">
                                    <i class="fa-solid fa-table-list"></i>
                                    <span class="ms-1 d-none d-sm-inline-block">Cuisines</span>
                                </a>
                                <button class="btn btn-success btn-sm ms-2 mb-0" type="submit">
                                    <i class="fa-solid fa-check"></i>
                                    <span class="ms-1 d-none d-sm-inline-block">Create</span>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Cuisine Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title" class="form-control-label">Title</label>
                                    <input class="form-control @error('title') is-invalid @enderror @error('slug') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Cuisine title">
                                    @error('title')
                                        <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                    @error('slug')
                                        <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <label for="description" class="form-control-label">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Cuisine description" rows="3">{{ old('description') }}</textarea>
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
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/buffer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/filetype.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/piexif.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/fileinput.min.js"></script>
    <script>
        $("#photo").fileinput({ 'showUpload': false,  }).attr('name', 'photo');
    </script>
@endpushonce

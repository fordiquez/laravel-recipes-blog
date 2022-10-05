@extends('layouts.admin')

@section('title', 'Admin – Cuisines – ' . $cuisine->title . ' – Edit')

@pushonce('styles')
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
                        <img src="{{ asset($cuisine->getPhoto()) }}" class="w-100 border-radius-lg shadow-sm"
                             alt="{{ $cuisine->title }}" title="{{ $cuisine->title }}">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">{{ $cuisine->title }}</h5>
                        <p class="mb-0 font-weight-bold text-sm">{{ $cuisine->slug }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.cuisines.update', $cuisine) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Edit Cuisine</p>
                                <a href="{{ route('admin.cuisines.index') }}" class="btn btn-primary btn-sm ms-auto mb-0">
                                    <i class="fa-solid fa-table-list"></i>
                                    <span class="ms-1">Cuisines</span>
                                </a>
                                <button class="btn btn-success btn-sm ms-2 mb-0" type="submit">
                                    <i class="fa-solid fa-check"></i>
                                    <span class="ms-1">Update</span>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Cuisine Information</p>
                            <div class="row">
                                <div>
                                    <div class="form-group @error('title') mb-0 @enderror @error('slug') mb-0 @enderror">
                                        <label for="title" class="form-control-label">Title</label>
                                        <input class="form-control @error('title') is-invalid @enderror @error('slug') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title', $cuisine->title) }}" placeholder="Cuisine title">
                                    </div>
                                    @error('title')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                    @error('slug')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <div class="form-group @error('description') mb-0 @enderror">
                                        <label for="description" class="form-control-label">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Cuisine description" rows="3">{{ old('description', $cuisine->description) }}</textarea>
                                    </div>
                                    @error('description')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <div class="form-group @error('photo') mb-0 @enderror">
                                        <label class="form-label" for="photo">Photo</label>
                                        <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" id="photo" accept="image/*">
                                    </div>
                                    @error('photo')
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
                                        <input class="form-control" type="text" name="created_at" id="created_at" value="{{ old('created_at', $cuisine->created_at) }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="updated_at" class="form-control-label">Updated at</label>
                                        <input class="form-control" type="text" name="updated_at" id="updated_at" value="{{ old('updated_at', $cuisine->updated_at) }}" disabled>
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
    <script src="{{ asset('assets/js/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ckeditor.js') }}"></script>
@endpushonce

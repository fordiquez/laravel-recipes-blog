@extends('layouts.admin')

@section('title', 'Admin – Categories – Create')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.categories.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex flex-column flex-sm-row align-items-center justify-content-between">
                                <p class="mb-0">Create Category</p>
                                <div class="mt-3 mt-sm-0">
                                    <a href="{{ route('admin.categories.index') }}" class="btn btn-primary btn-sm mb-0">
                                        <i class="fa-solid fa-table-list"></i>
                                        <span class="ms-1">Categories</span>
                                    </a>
                                    <button class="btn btn-success btn-sm ms-2 mb-0" type="submit">
                                        <i class="fa-solid fa-user-check"></i>
                                        <span class="ms-1">Create</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Category Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title" class="form-control-label">Title</label>
                                    <input class="form-control @error('title') is-invalid @enderror @error('slug') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Category title">
                                    @error('title')
                                        <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                    @error('slug')
                                        <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                @if(count($categories))
                                    <div class="col-md-6">
                                        <label for="parent_id">Parent Category</label>
                                        <select class="form-control @error('parent_id') is-invalid @enderror" id="parent_id" name="parent_id">
                                            <option disabled selected>Select the parent category</option>
                                            @foreach($categories as $category)
                                                <option @selected(old('parent_id') == $category->id) value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                        @error('parent_id')
                                            <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                        @enderror
                                    </div>
                                @endif
                                <div class="col-md-6 mt-3">
                                    <div class="card card-plain">
                                        <div class="position-relative">
                                            <img src="{{ asset('assets/admin/img/image-not-found.svg') }}" class="shadow border-radius-lg w-sm-50" id="photo-preview" alt="Category photo" title="Category photo">
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
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@pushonce('scripts')
    <script src="{{ asset('assets/admin/js/plugins/photo-preview.js') }}"></script>
@endpushonce

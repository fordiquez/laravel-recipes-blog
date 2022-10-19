@extends('layouts.admin')

@section('title', 'Admin – Categories – ' . $category->title . ' – Edit')

@section('content')
    <div class="card shadow-lg mx-4 card-profile-bottom">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">{{ $category->title }}</h5>
                        <p class="mb-0 font-weight-bold text-sm">{{ $category->slug }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.categories.update', $category) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex flex-column flex-sm-row align-items-center justify-content-between">
                                <p class="mb-0">Edit Category</p>
                                <div class="mt-3 mt-sm-0">
                                    <a href="{{ route('admin.categories.index') }}" class="btn btn-primary btn-sm mb-0">
                                        <i class="fa-solid fa-table-list"></i>
                                        <span class="ms-1">Categories</span>
                                    </a>
                                    <button class="btn btn-success btn-sm ms-2 mb-0" type="submit">
                                        <i class="fa-solid fa-user-check"></i>
                                        <span class="ms-1">Update</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Category Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title" class="form-control-label">Title</label>
                                    <input class="form-control @error('title') is-invalid @enderror @error('slug') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title', $category->title) }}" placeholder="Category title">
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
                                            @foreach($categories as $item)
                                                <option @selected(old('parent_id', $category->parent_id) == $item->id) value="{{ $item->id }}">{{ $item->title }}</option>
                                            @endforeach
                                            @if(!empty($category->parent_id))
                                                <option value>Unset parent category</option>
                                            @endif
                                        </select>
                                        @error('parent_id')
                                            <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                        @enderror
                                    </div>
                                @endif
                                <div class="col-md-6 mt-3">
                                    <div class="card card-plain">
                                        <div class="position-relative">
                                            <img src="{{ asset($category->getPhoto()) }}" @class(['shadow border-radius-lg', 'w-100' => $category->photo, 'w-sm-50' => !$category->photo]) id="photo-preview" alt="{{ $category->title }}" title="{{ $category->title }}">
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
                        <hr class="horizontal dark">
                        <div class="card-footer">
                            <p class="text-uppercase text-sm">Additional Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="created_at" class="form-control-label">Created at</label>
                                    <input class="form-control" type="text" name="created_at" id="created_at" value="{{ old('created_at', $category->created_at) }}" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="updated_at" class="form-control-label">Updated at</label>
                                    <input class="form-control" type="text" name="updated_at" id="updated_at" value="{{ old('updated_at', $category->updated_at) }}" disabled>
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
    <script src="{{ asset('assets/js/plugins/photo-preview.js') }}"></script>
@endpushonce

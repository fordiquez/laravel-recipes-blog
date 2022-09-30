@extends('layouts.argon')

@section('title', 'Admin – Categories – Create')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.categories.store') }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Create Category</p>
                                <a href="{{ route('admin.categories.index') }}" class="btn btn-primary btn-sm ms-auto mb-0">
                                    <i class="fa-solid fa-table-list"></i>
                                    <span class="ms-1 d-none d-sm-inline-block">Categories</span>
                                </a>
                                <button class="btn btn-success btn-sm ms-2 mb-0" type="submit">
                                    <i class="fa-solid fa-check"></i>
                                    <span class="ms-1 d-none d-sm-inline-block">Create</span>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Category Information</p>
                            <div class="row">
                                <div>
                                    <div class="form-group @error('title') mb-0 @enderror @error('slug') mb-0 @enderror">
                                        <label for="title" class="form-control-label">Title</label>
                                        <input class="form-control @error('title') is-invalid @enderror @error('slug') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Category title">
                                    </div>
                                    @error('title')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                    @error('slug')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                @if(count($categories))
                                    <div>
                                        <div class="form-group @error('parent_id') mb-0 @enderror">
                                            <label for="parent_id">Parent Category</label>
                                            <select class="form-control @error('parent_id') is-invalid @enderror" id="parent_id" name="parent_id">
                                                <option disabled selected>Select the parent category</option>
                                                @foreach($categories as $category)
                                                    <option @selected(old('parent_id') == $category->id) value="{{ $category->id }}">{{ $category->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('parent_id')
                                        <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                        @enderror
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.argon')

@section('title', 'Admin – Categories – ' . $category->title)

@section('content')
    <div class="mx-3 mx-lg-5 my-7">
        <div class="card card-profile">
            <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-sm btn-primary mb-0 d-flex align-items-center">
                        <i class="fa-solid fa-table-list"></i>
                        <span class="ms-1 d-none d-sm-inline-block">Categories</span>
                    </a>
                    <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-sm btn-success mb-0 d-flex align-items-center">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <span class="ms-1 d-none d-sm-inline-block">Edit</span>
                    </a>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="text-center">
                        <h5>{{ $category->title }}</h5>
                        <div class="h6 font-weight-300">{{ $category->slug }}</div>
                        @if(!empty($category->parent))
                            <div class="mb-3">
                                <span class="badge bg-gradient-primary">{{ $category->parent->title }}</span>
                            </div>
                        @endif
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-center">
                            <div class="d-grid text-center">
                                <span class="text-lg font-weight-bolder">22</span>
                                <span class="text-sm opacity-8">Friends</span>
                            </div>
                            <div class="d-grid text-center mx-4">
                                <span class="text-lg font-weight-bolder">10</span>
                                <span class="text-sm opacity-8">Photos</span>
                            </div>
                            <div class="d-grid text-center">
                                <span class="text-lg font-weight-bolder">89</span>
                                <span class="text-sm opacity-8">Comments</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <div class="mt-4 d-flex justify-content-center">
                        Created: <span class="badge bg-gradient-primary ms-1">{{ $category->created_at }}</span>
                    </div>
                    <div class="mt-1 d-flex justify-content-center">
                        Updated: <span class="badge bg-gradient-success ms-1">{{ $category->updated_at }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.admin')

@section('title', 'Admin – Tags – ' . $tag->title)

@section('content')
    <div class="mx-3 mx-lg-5 my-7">
        <div class="card card-profile">
            <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.tags.index') }}" class="btn btn-sm btn-primary mb-0 d-flex align-items-center">
                        <i class="fa-solid fa-table-list"></i>
                        <span class="ms-1 d-none d-sm-inline-block">Tags</span>
                    </a>
                    <a href="{{ route('admin.tags.edit', $tag) }}" class="btn btn-sm btn-success mb-0 d-flex align-items-center">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <span class="ms-1 d-none d-sm-inline-block">Edit</span>
                    </a>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="text-center">
                        <h5>{{ $tag->title }}</h5>
                        <div class="h6 font-weight-300">{{ $tag->slug }}</div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-center">
                            <div class="d-grid text-center">
                                <span class="text-lg font-weight-bolder">{{ $tag->recipes()->count() }}</span>
                                <span class="text-sm opacity-8">Recipes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <div class="mt-4 d-flex justify-content-center">
                    Created: <span class="badge bg-gradient-primary ms-1">{{ $tag->created_at }}</span>
                </div>
                <div class="mt-1 d-flex justify-content-center">
                    Updated: <span class="badge bg-gradient-success ms-1">{{ $tag->updated_at }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection

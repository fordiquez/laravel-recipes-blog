@extends('layouts.admin')

@section('title', 'Admin – Tags – ' . $tag->title . ' – Edit')

@section('content')
    <div class="card shadow-lg mx-4 card-profile-bottom">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">{{ $tag->title }}</h5>
                        <p class="mb-0 font-weight-bold text-sm">{{ $tag->slug }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.tags.update', $tag) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Edit Tag</p>
                                <a href="{{ route('admin.tags.index') }}" class="btn btn-primary btn-sm ms-auto mb-0">
                                    <i class="fa-solid fa-table-list"></i>
                                    <span class="ms-1">Tags</span>
                                </a>
                                <button class="btn btn-success btn-sm ms-2 mb-0" type="submit">
                                    <i class="fa-solid fa-check"></i>
                                    <span class="ms-1">Update</span>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Tag Information</p>
                            <div class="row">
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <label for="title" class="form-control-label">Title</label>
                                    <input class="form-control @error('title') is-invalid @enderror @error('slug') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title', $tag->title) }}" placeholder="Tag title">
                                    @error('title')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                    @error('slug')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <div class="card-footer">
                            <p class="text-uppercase text-sm">Additional Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="created_at" class="form-control-label">Created at</label>
                                    <input class="form-control" type="text" name="created_at" id="created_at" value="{{ old('created_at', $tag->created_at) }}" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="updated_at" class="form-control-label">Updated at</label>
                                    <input class="form-control" type="text" name="updated_at" id="updated_at" value="{{ old('updated_at', $tag->updated_at) }}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

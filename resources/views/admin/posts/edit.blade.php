@extends('layouts.admin')

@section('title', 'Admin – Posts – ' . $post->title . ' – Edit')

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
    <div class="card shadow-lg mx-4 card-profile-bottom">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="{{ asset($post->getPhoto()) }}" class="w-100 border-radius-lg shadow-sm"
                             alt="{{ $post->title }}" title="{{ $post->title }}">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">{{ $post->title }}</h5>
                        <p class="mb-0 font-weight-bold text-sm">{{ $post->title }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('admin.posts.update', $post) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Edit Post</p>
                                <a href="{{ route('admin.posts.index') }}" class="btn btn-primary btn-sm ms-auto mb-0">
                                    <i class="fa-solid fa-table-list"></i>
                                    <span class="ms-1">Posts</span>
                                </a>
                                <button class="btn btn-success btn-sm ms-2 mb-0" type="submit">
                                    <i class="fa-solid fa-user-check"></i>
                                    <span class="ms-1">Update</span>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Post Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="title" class="form-control-label">Title</label>
                                    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title', $post->title) }}" placeholder="Post title">
                                    @error('title')
                                        <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="user_id">User</label>
                                    <select class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id">
                                        <option disabled selected>Select the user</option>
                                        @foreach($users as $user)
                                            <option @selected(old('user_id', $post->user_id) == $user->id) value="{{ $user->id }}">{{ $user->getFullName() }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                    <div class="invalid-feedback d-inline-block" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <label for="content" class="form-control-label">Content</label>
                                    <textarea id="content" name="content">{{ old('content', $post->content) }}</textarea>
                                    @error('content')
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
                        <hr class="horizontal dark">
                        <div class="card-footer">
                            <p class="text-uppercase text-sm">Additional Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="created_at" class="form-control-label">Created at</label>
                                    <input class="form-control" type="text" name="created_at" id="created_at" value="{{ old('created_at', $post->created_at) }}" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="updated_at" class="form-control-label">Updated at</label>
                                    <input class="form-control" type="text" name="updated_at" id="updated_at" value="{{ old('updated_at', $post->updated_at) }}" disabled>
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

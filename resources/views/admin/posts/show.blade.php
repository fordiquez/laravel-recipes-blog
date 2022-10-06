@extends('layouts.admin')

@section('title', 'Admin – Posts – ' . $post->title)

@section('content')
    <div class="mx-3 mx-lg-5 my-7">
        <div class="card card-profile">
            <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-sm btn-primary mb-0 d-flex align-items-center">
                        <i class="fa-solid fa-table-list"></i>
                        <span class="ms-1 d-none d-sm-inline-block">Posts</span>
                    </a>
                    <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-sm btn-success mb-0 d-flex align-items-center">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <span class="ms-1 d-none d-sm-inline-block">Edit</span>
                    </a>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="mt-2">
                    <h5 class="text-center">{{ $post->title }}</h5>
                    <hr class="horizontal dark">
                    <div class="row justify-content-center">
                        <div class="col-10 d-flex flex-column justify-content-center">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    Created: <span class="badge bg-gradient-primary ms-1">{{ $post->created_at }}</span>
                                </div>
                                <a href="{{ route('admin.users.show', $post->user) }}" class="btn bg-gradient-danger btn-xs text-uppercase">
                                    {{ $post->user->getFullName() }}
                                </a>
                                <div class="d-flex align-items-center">
                                    Updated: <span class="badge bg-gradient-success ms-1">{{ $post->updated_at }}</span>
                                </div>
                            </div>
                            <div class="image d-flex justify-content-center">
                                <img src="{{ asset($post->getPhoto()) }}" alt="{{ $post->title }}" title="{{ $post->title }}"
                                     class="img-fluid border border-2 border-white mt-3">
                            </div>
                        </div>
                    </div>
                    <div class="text-left mt-3">{!! $post->content !!}</div>
                </div>
            </div>
        </div>
    </div>
@endsection

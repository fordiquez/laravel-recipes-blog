@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $post->title }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Posts</a></li>
                            <li class="breadcrumb-item active">{{ $post->title }}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>ID:</strong> <i>{{ $post->id }}</i></li>
                            <li class="list-group-item"><strong>Title:</strong> <i>{{ $post->title }}</i></li>
                            <li class="list-group-item"><strong>Category:</strong> <i>{{ $post->category->title }}</i></li>
                            @if(count($post->tags))
                                <li class="list-group-item">
                                    <strong>Tags:</strong>
                                    @foreach($post->tags as $tag)
                                        <span class="badge badge-primary">{{ $tag->title }}</span>
                                    @endforeach
                                </li>
                            @endif
                            <li class="list-group-item"><strong>Content:</strong> <i>{!! $post->content !!}</i></li>
                            <li class="list-group-item">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Post images</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                                        <div id="accordion">
                                            <div class="card card-info">
                                                <div class="card-header">
                                                    <h4 class="card-title w-100">
                                                        <a class="d-block w-100 collapsed" data-toggle="collapse" href="#previewImage" aria-expanded="false">
                                                            Preview image
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="previewImage" class="collapse" data-parent="#accordion" style="">
                                                    <div class="card-body">
                                                        <img src="{{ url('storage/' . $post->preview_image) }}" class="w-100 h-25" alt="Preview image" title="Preview image">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card card-info">
                                                <div class="card-header">
                                                    <h4 class="card-title w-100">
                                                        <a class="d-block w-100 collapsed" data-toggle="collapse" href="#mainImage" aria-expanded="false">
                                                            Main image
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="mainImage" class="collapse" data-parent="#accordion" style="">
                                                    <div class="card-body">
                                                        <img src="{{ url('storage/' . $post->main_image) }}" class="w-100 h-25" alt="Main image" title="Main image">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </li>
                            <li class="list-group-item"><strong>Created at:</strong> <i>{{ $post->created_at }}</i></li>
                            <li class="list-group-item"><strong>Updated at:</strong> <i>{{ $post->updated_at }}</i></li>
                        </ul>
                        <div class="mt-3">
                            <a href="{{ route('admin.post.index') }}" class="btn btn-primary"><i class="fas fa-th-list mr-2"></i>Posts</a>
                            <div class="d-flex float-right">
                                <a href="{{ route('admin.post.edit', $post) }}" class="btn btn-success mr-2">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('admin.post.destroy', $post) }}" method="POST" class="d-inline-flex">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

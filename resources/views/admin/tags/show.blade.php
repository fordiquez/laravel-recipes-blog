@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $tag->title }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.tag.index') }}">Tags</a></li>
                            <li class="breadcrumb-item active">{{ $tag->title }}</li>
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
                    <div class="col-12 col-lg-4 col-md-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>ID:</strong> <i>{{ $tag->id }}</i></li>
                            <li class="list-group-item"><strong>Title:</strong> <i>{{ $tag->title }}</i></li>
                            <li class="list-group-item"><strong>Created at:</strong> <i>{{ $tag->created_at }}</i></li>
                            <li class="list-group-item"><strong>Updated at:</strong> <i>{{ $tag->updated_at }}</i></li>
                        </ul>
                        <div class="mt-3">
                            <a href="{{ route('admin.tag.index') }}" class="btn btn-primary"><i class="fas fa-th-list mr-2"></i>Categories</a>
                            <div class="d-flex float-right">
                                <a href="{{ route('admin.tag.edit', $tag) }}" class="btn btn-success mr-2">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('admin.tag.destroy', $tag) }}" method="POST" class="d-inline-flex">
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

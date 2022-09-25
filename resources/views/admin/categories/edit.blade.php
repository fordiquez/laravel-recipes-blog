@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        @include('admin.components.content-header', [
            'title' => 'Edit',
            'breadcrumbs' => [
                ['title' => 'Categories', 'route' => route('admin.category.index')],
                ['title' => $category->title, 'route' => route('admin.category.show', $category)],
                ['title' => 'Edit']
            ]
        ])

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12 col-lg-4 col-md-6">
                        <form action="{{ route('admin.category.update', $category) }}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Title</span>
                                </div>
                                <input type="text" name="title" value="{{ $category->title }}"
                                       class="form-control @error('title') is-invalid @enderror"
                                       placeholder="Category title">
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <a href="{{ route('admin.category.index') }}" class="btn btn-primary">
                                <i class="fas fa-th-list mr-2"></i>Categories
                            </a>
                            <button type="submit" class="btn btn-success float-right">
                                <i class="fas fa-pencil-alt mr-2"></i>Update
                            </button>
                        </form>
                        <!-- /.card -->
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


@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        @include('admin.components.content-header', [
            'title' => 'Edit',
            'breadcrumbs' => [
                ['title' => 'Tags', 'route' => route('admin.tag.index')],
                ['title' => $tag->title, 'route' => route('admin.tag.show', $tag)],
                ['title' => 'Edit']
            ]
        ])

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12 col-lg-4 col-md-6">
                        <form action="{{ route('admin.tag.update', $tag) }}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Title</span>
                                </div>
                                <input type="text" name="title" value="{{ $tag->title }}"
                                       class="form-control @error('title') is-invalid @enderror"
                                       placeholder="Tag title">
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <a href="{{ route('admin.tag.index') }}" class="btn btn-primary">
                                <i class="fas fa-th-list mr-2"></i>Tags
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


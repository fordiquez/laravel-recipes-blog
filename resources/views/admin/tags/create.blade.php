@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        @include('admin.components.content-header', [
            'title' => 'Tags',
            'breadcrumbs' => [
                ['title' => 'Tags', 'route' => route('admin.tag.index')],
                ['title' => 'Create']
            ]
        ])

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12 col-lg-4 col-md-6">
                        <form action="{{ route('admin.tag.store') }}" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Title</span>
                                </div>
                                <input type="text" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" placeholder="Tag title">
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit">
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

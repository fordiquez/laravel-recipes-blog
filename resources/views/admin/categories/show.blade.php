@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        @include('admin.components.content-header', [
            'title' => $category->title,
            'breadcrumbs' => [
                ['title' => 'Categories', 'route' => route('admin.category.index')],
                ['title' => $category->title]
            ]
        ])

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12 col-lg-4 col-md-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>ID:</strong> <i>{{ $category->id }}</i></li>
                            <li class="list-group-item"><strong>Title:</strong> <i>{{ $category->title }}</i></li>
                            <li class="list-group-item"><strong>Created at:</strong> <i>{{ $category->created_at }}</i></li>
                            <li class="list-group-item"><strong>Updated at:</strong> <i>{{ $category->updated_at }}</i></li>
                        </ul>
                        <div class="mt-3">
                            <a href="{{ route('admin.category.index') }}" class="btn btn-primary"><i class="fas fa-th-list mr-2"></i>Categories</a>
                            <div class="d-flex float-right">
                                <a href="{{ route('admin.category.edit', $category) }}" class="btn btn-success mr-2">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('admin.category.destroy', $category) }}" method="POST" class="d-inline-flex">
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

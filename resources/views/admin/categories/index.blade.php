@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Categories</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right"><li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Categories</li>
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
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Categories list</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <a href="{{ route('admin.category.create') }}" class="btn btn-block bg-gradient-primary">
                                            <i class="fas fa-edit"></i>
                                            <span>Create</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Created</th>
                                        <th>Updated</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->title }}</td>
                                            <td>{{ $category->created_at }}</td>
                                            <td>{{ $category->updated_at }}</td>
                                            <td class="text-center">

                                                <a href="{{ route('admin.category.show', $category) }}" class="text-info">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.category.edit', $category) }}" class="mx-2 text-success">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('admin.category.destroy', $category) }}" method="POST" class="d-inline-flex">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="border-0 bg-transparent">
                                                        <i class="fas fa-trash text-danger" role="button"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
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

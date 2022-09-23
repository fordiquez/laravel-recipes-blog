@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tags</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right"><li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Tags</li>
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
                                <h3 class="card-title">Tags list</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <a href="{{ route('admin.tag.create') }}" class="btn btn-block bg-gradient-primary">
                                            <i class="fas fa-edit"></i>
                                            <span>Create</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            @if(count($tags))
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
                                        @foreach($tags as $tag)
                                            <tr>
                                                <td>{{ $tag->id }}</td>
                                                <td>{{ $tag->title }}</td>
                                                <td>{{ $tag->created_at }}</td>
                                                <td>{{ $tag->updated_at }}</td>
                                                <td class="text-center">

                                                    <a href="{{ route('admin.tag.show', $tag) }}" class="text-info">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('admin.tag.edit', $tag) }}" class="mx-2 text-success">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <form action="{{ route('admin.tag.destroy', $tag) }}" method="POST" class="d-inline-flex">
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
                            @endif
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

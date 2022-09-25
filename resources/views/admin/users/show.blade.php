@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        @include('admin.components.content-header', [
            'title' => $user->name,
            'breadcrumbs' => [
                ['title' => 'Users', 'route' => route('admin.user.index')],
                ['title' => $user->name]
            ]
        ])

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>ID:</strong> <i>{{ $user->id }}</i></li>
                            <li class="list-group-item"><strong>Name:</strong> <i>{{ $user->name }}</i></li>
                            <li class="list-group-item"><strong>Email:</strong> <i>{{ $user->email }}</i></li>
                            <li class="list-group-item"><strong>Role:</strong> <i>{{ $user->getRole($user->role) }}</i></li>
                            <li class="list-group-item"><strong>Created at:</strong> <i>{{ $user->created_at }}</i></li>
                            <li class="list-group-item"><strong>Updated at:</strong> <i>{{ $user->updated_at }}</i></li>
                        </ul>
                        <div class="mt-3">
                            <a href="{{ route('admin.user.index') }}" class="btn btn-primary"><i class="fas fa-th-list mr-2"></i>Users</a>
                            <div class="d-flex float-right">
                                <a href="{{ route('admin.user.edit', $user) }}" class="btn btn-success mr-2">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('admin.user.destroy', $user) }}" method="POST" class="d-inline-flex">
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

@extends('layouts.admin')

@section('title', 'Admin – Categories')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex align-items-center justify-content-between">
                        <h5>Categories list</h5>
                        <a href="{{ route('admin.categories.create') }}" class="btn btn-icon btn-sm btn-primary">
                            <span class="btn-inner--icon"><i class="fa-solid fa-plus text-lg"></i></span>
                        </a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        @if(count($categories))
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Parent</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Created</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Updated</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td class="align-middle">
                                                <p class="text-xs font-weight-bold mb-0 ms-3">{{ $category->id }}</p>
                                            </td>
                                            <td class="d-flex">
                                                <a href="{{ route('admin.categories.show', $category) }}" class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $category->title }}</h6>
                                                        <p class="text-xs text-secondary mb-0">{{ $category->slug }}</p>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="{{ route('admin.categories.show', $category->parent) }}" class="text-sm">
                                                    <span class="badge bg-gradient-dark">{{ $category->parent->title ?? '' }}</span>
                                                </a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $category->created_at }}</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $category->created_at }}</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="{{ route('admin.categories.show', $category) }}" class="btn btn-icon btn-xs btn-primary mb-0">
                                                    <span class="btn-inner--icon"><i class="fa-solid fa-eye"></i></span>
                                                </a>
                                                <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-icon btn-xs btn-success mb-0">
                                                    <span class="btn-inner--icon"><i class="fa-solid fa-pen-to-square"></i></span>
                                                </a>
                                                <form action="{{ route('admin.categories.destroy', $category) }}" method="post" class="d-inline-block">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-icon btn-xs btn-danger mb-0" type="submit">
                                                        <span class="btn-inner--icon"><i class="fa-regular fa-trash-can"></i></span>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="m-3">{{ $categories->links() }}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

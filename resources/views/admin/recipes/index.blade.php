@extends('layouts.admin')

@section('title', 'Admin – Recipes')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex align-items-center justify-content-between">
                        <h5>Recipes list</h5>
                        <a href="{{ route('admin.recipes.create') }}" class="btn btn-icon btn-sm btn-primary">
                            <span class="btn-inner--icon"><i class="fa-solid fa-plus text-lg"></i></span>
                        </a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        @if(count($recipes))
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Recipe Info</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">User</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Published</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Created</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Updated</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($recipes as $recipe)
                                        <tr>
                                            <td class="align-middle">
                                                <p class="text-xs font-weight-bold mb-0 ms-3">{{ $recipe->id }}</p>
                                            </td>
                                            <td class="d-flex">
                                                <a href="{{ route('admin.recipes.show', $recipe) }}" class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset($recipe->getPhoto()) }}" class="avatar avatar-sm me-3"
                                                             alt="{{ $recipe->title }}" title="{{ $recipe->title }}">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm" style="white-space: normal">
                                                            {{ substr($recipe->title, 0, 50) }}
                                                        </h6>
                                                        <p class="text-xs text-secondary mb-0" style="white-space: normal">
                                                            {{ substr($recipe->slug, 0, 50) }}
                                                        </p>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="{{ route('admin.users.show', $recipe->user) }}" class="text-xs">
                                                    <span class="badge bg-gradient-dark">{{ $recipe->user->getFullName() }}</span>
                                                </a>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    <span @class(['badge', 'bg-gradient-success' => $recipe->is_published, 'bg-gradient-danger' => !$recipe->is_published])>
                                                        {{ $recipe->is_published ? 'Published' : 'Not published' }}
                                                    </span>
                                                </p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $recipe->created_at }}</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{ $recipe->created_at }}</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="{{ route('admin.recipes.show', $recipe) }}" class="btn btn-icon btn-xs btn-primary mb-0">
                                                    <span class="btn-inner--icon"><i class="fa-solid fa-eye"></i></span>
                                                </a>
                                                <a href="{{ route('admin.recipes.edit', $recipe) }}" class="btn btn-icon btn-xs btn-success mb-0">
                                                    <span class="btn-inner--icon"><i class="fa-solid fa-pen-to-square"></i></span>
                                                </a>
                                                <form action="{{ route('admin.recipes.destroy', $recipe) }}" method="post" class="d-inline-block">
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
                            <div class="m-3">{{ $recipes->links() }}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

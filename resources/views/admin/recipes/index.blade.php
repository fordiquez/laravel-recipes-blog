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
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset($recipe->getPhoto($recipe)) }}" class="avatar avatar-sm me-3"
                                                             alt="{{ $recipe->title }}" title="{{ $recipe->title }}">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $recipe->title }}</h6>
                                                        <p class="text-xs text-secondary mb-0">{{ $recipe->slug }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    @if($recipe->is_published)
                                                        <span class="badge bg-gradient-success">Published</span>
                                                    @else
                                                        <span class="badge bg-gradient-danger">Not published</span>
                                                    @endif
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
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

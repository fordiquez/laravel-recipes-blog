@extends('layouts.admin')

@section('title', 'Admin – Cuisines – ' . $cuisine->title)

@section('content')
    <div class="mx-3 mx-lg-5 my-7">
        <div class="card card-profile">
            <div class="row justify-content-center">
                <div class="col-4 col-lg-4 order-lg-2">
                    <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                        <img src="{{ asset($cuisine->getPhoto()) }}"
                             class="rounded-circle img-fluid border border-2 border-white"
                             alt="{{ $cuisine->title }}" title="{{ $cuisine->title }}">
                    </div>
                </div>
            </div>
            <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.cuisines.index') }}" class="btn btn-sm btn-primary mb-0 d-flex align-items-center">
                        <i class="fa-solid fa-table-list"></i>
                        <span class="ms-1 d-none d-sm-inline-block">Cuisines</span>
                    </a>
                    <a href="{{ route('admin.cuisines.edit', $cuisine) }}" class="btn btn-sm btn-success mb-0 d-flex align-items-center">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <span class="ms-1 d-none d-sm-inline-block">Edit</span>
                    </a>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col">
                        <div class="d-flex justify-content-center">
                            <div class="d-grid text-center">
                                <span class="text-lg font-weight-bolder">{{ $cuisine->recipes()->count() }}</span>
                                <span class="text-sm opacity-8">Recipes</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <h5>{{ $cuisine->title }}</h5>
                    <div class="h6 font-weight-300">{!! $cuisine->description !!}</div>
                    <div class="mt-4 d-flex justify-content-center">
                        Created: <span class="badge bg-gradient-primary ms-1">{{ $cuisine->created_at }}</span>
                    </div>
                    <div class="mt-1 d-flex justify-content-center">
                        Updated: <span class="badge bg-gradient-success ms-1">{{ $cuisine->updated_at }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

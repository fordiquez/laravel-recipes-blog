@extends('layouts.main')

@section('breadcrumb')
    <x-main.breadcrumb title="Account Dashboard"></x-main.breadcrumb>
@endsection

@section('content')
    <section class="my-account-wrap">
        <div class="container">
            <div class="row">
                <x-main.account-nav></x-main.account-nav>
                <div class="col-lg-8 col-12">
                    <div class="my-account-content tab-content">
                        <div class="dashboard">
                            <div class="media box-padding media-none--xs d-flex flex-column flex-sm-row">
                                <img src="{{ asset($user->getPhoto()) }}" class="w-25 align-self-sm-start align-self-center" alt="{{ $user->getFullName() }}" title="{{ $user->getFullName() }}">
                                <div class="media-body d-flex flex-column">
                                    <h2 class="card-title">{{ $user->getFullName() }}</h2>
                                    <h6 class="card-subtitle">{{ $user->email }}</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

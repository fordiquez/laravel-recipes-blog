@extends('layouts.main')

@section('breadcrumb')
    <x-main.breadcrumb title="Account Details"></x-main.breadcrumb>
@endsection

@section('content')
    <section class="my-account-wrap">
        <div class="container">
            <div class="row">
                <x-main.account-nav></x-main.account-nav>
                <div class="col-lg-8 col-12">

                </div>
            </div>
        </div>
    </section>
@endsection

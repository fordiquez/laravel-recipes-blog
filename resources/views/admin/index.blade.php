@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        @include('admin.components.content-header', [
            'title' => 'Dashboard',
            'breadcrumbs' => []
        ])

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $data['usersCount'] }}</h3>

                                <p>Users</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="{{ route('admin.user.index') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $data['categoriesCount'] }}</h3>

                                <p>Categories</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-th-list"></i>
                            </div>
                            <a href="{{ route('admin.category.index') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <!-- small box -->
                        <div class="small-box bg-purple">
                            <div class="inner">
                                <h3>{{ $data['postsCount'] }}</h3>

                                <p>Posts</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-tags"></i>
                            </div>
                            <a href="{{ route('admin.post.index') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <!-- small box -->
                        <div class="small-box bg-maroon">
                            <div class="inner">
                                <h3>{{ $data['tagsCount'] }}</h3>

                                <p>Tags</p>
                            </div>
                            <div class="icon">
                                <i class="far fa-clipboard"></i>
                            </div>
                            <a href="{{ route('admin.tag.index') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

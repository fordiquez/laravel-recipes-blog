<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ $title }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    @if(!count($breadcrumbs))
                        <li class="breadcrumb-item active">Dashboard</li>
                    @else
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                        @foreach($breadcrumbs as $breadcrumb)
                            @if(isset($breadcrumb['route']))
                                <li class="breadcrumb-item"><a href="{{ $breadcrumb['route'] }}">{{ $breadcrumb['title'] }}</a></li>
                            @else
                                <li class="breadcrumb-item active">{{ $breadcrumb['title'] }}</li>
                            @endif
                        @endforeach
                    @endisset
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

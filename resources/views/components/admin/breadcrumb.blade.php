<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-links me-sm-6 me-5">
        @if(count($routes))
            <li class="breadcrumb-item text-sm text-white">
                <a class="opacity-5 text-white" href="{{ route('admin.index') }}">Dashboard</a>
            </li>
            @foreach($routes as $route)
                @if(!$loop->last)
                    <li class="breadcrumb-item">
                        <a class="text-white opacity-5 text-capitalize" href="{{ route($route['name']) }}">
                            {{ $route['title'] }}
                        </a>
                    </li>
                @else
                    <li class="breadcrumb-item text-white text-capitalize">{{ $route['title'] }}</li>
                @endif
            @endforeach
        @else
            <li class="breadcrumb-item text-sm text-white active">Dashboard</li>
        @endif
    </ol>
</nav>

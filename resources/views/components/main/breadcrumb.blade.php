@if(!$isHome)
    <div class="entry-banner" style="background: url({{ url('assets/images/banner.jpg') }}) no-repeat scroll center center / cover">
        <div class="container">
            <div class="entry-banner-content">
                <h1 class="entry-title text-capitalize">{{ $title }}</h1>
                <div class="breadcrumb-area">
                    <div class="entry-breadcrumb d-flex justify-content-center align-items-center">
                        <a href="{{ route('main.index') }}">
                            <i class="fa-solid fa-house-chimney"></i>
                            <span>Home</span>
                        </a>
                        @foreach($routes as $route)
                            <em class="delimiter">
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </em>
                            @if(!$loop->last)
                                <a href="{{ route($route['name']) }}">
                                    <span class="text-capitalize">{{ $route['title'] }}</span>
                                </a>
                            @else
                                <div>
                                    <span class="current text-capitalize">{{ $route['title'] }}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

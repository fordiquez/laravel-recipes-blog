<div class="col-lg-4 col-12">
    <ul class="nav my-account-nav">
        @foreach($routes as $route)
            <li>
                <a href="{{ route($route['name']) }}" @class(['active' => $isActive($route['name'])])>
                    {{ $route['title'] }}
                </a>
            </li>
        @endforeach
        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</div>

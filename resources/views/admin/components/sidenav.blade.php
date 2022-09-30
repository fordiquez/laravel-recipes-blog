<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('admin.index') }}">
            <img src="{{ asset('assets/img/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Admin Panel</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link @if($route == 'admin.index') active @endif" href="{{ route('admin.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-desktop text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if($route == 'admin.users.index') active @endif" href="{{ route('admin.users.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-users-gear text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if($route == 'admin.cuisines.index') active @endif" href="{{ route('admin.cuisines.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-utensils text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Cuisines</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if($route == 'admin.categories.index') active @endif" href="{{ route('admin.categories.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-regular fa-rectangle-list text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Categories</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if($route == 'admin.recipes.index') active @endif" href="{{ route('admin.recipes.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-kitchen-set text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Recipes</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if($route == 'admin.tags.index') active @endif" href="{{ route('admin.tags.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-bookmark text-secondary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tags</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if($route == 'admin.posts.index') active @endif" href="{{ route('admin.posts.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-clipboard text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Posts</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer mx-3">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="btn bg-gradient-primary mb-0 w-100">
                <span class="btn-inner--icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></span>
                <span class="btn-inner--text">Logout</span>
            </button>
        </form>
    </div>
</aside>

<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('admin.index') }}">
            <img src="{{ asset('assets/admin/img/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Admin Panel</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <x-nav-item route="admin.index" icon="fa-solid fa-desktop text-primary">Dashboard</x-nav-item>
            <x-nav-item route="admin.users.index" icon="fa-solid fa-users-gear text-info">Users</x-nav-item>
            <x-nav-item route="admin.cuisines.index" icon="fa-solid fa-utensils text-success">Cuisines</x-nav-item>
            <x-nav-item route="admin.categories.index" icon="fa-regular fa-rectangle-list text-warning">Categories</x-nav-item>
            <x-nav-item route="admin.recipes.index" icon="fa-solid fa-kitchen-set text-danger">Recipes</x-nav-item>
            <x-nav-item route="admin.tags.index" icon="fa-solid fa-bookmark text-secondary">Tags</x-nav-item>
            <x-nav-item route="admin.posts.index" icon="fa-solid fa-clipboard text-dark">Posts</x-nav-item>
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

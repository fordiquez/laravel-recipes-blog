<li class="nav-item">
    <a @class(['nav-link', 'active' => $isActive]) href="{{ route($route) }}">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i @class([$icon, 'text-sm opacity-10'])></i>
        </div>
        <span class="nav-link-text ms-1">{{ $slot }}</span>
    </a>
</li>

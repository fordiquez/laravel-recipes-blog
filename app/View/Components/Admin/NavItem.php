<?php

namespace App\View\Components\Admin;

use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class NavItem extends Component
{
    public string $route = 'admin.index';
    public string $icon = '';
    public bool $isActive = false;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $icon)
    {
        $this->route = $route;
        $this->icon = $icon;
        $this->isActive = $this->route === Route::currentRouteName();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.nav-item');
    }
}

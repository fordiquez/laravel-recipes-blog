<?php

namespace App\View\Components\Main;

use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class AccountNav extends Component
{
    public array $routes = [
        [
            'name' => 'main.account.index',
            'title' => 'Dashboard'
        ],
        [
            'name' => 'main.account.recipes',
            'title' => 'My recipes'
        ],
        [
            'name' => 'main.account.favorites',
            'title' => 'Favorites'
        ],
        [
            'name' => 'main.account.details',
            'title' => 'Account details'
        ],
    ];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function isActive(string $route): bool
    {
        return $route === Route::currentRouteName();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.main.account-nav');
    }
}

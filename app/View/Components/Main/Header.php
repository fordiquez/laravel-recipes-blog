<?php

namespace App\View\Components\Main;

use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class Header extends Component
{
    public object|array $cuisines = [];
    public object|array $categories = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(object $cuisines, object $categories)
    {
        $this->cuisines = $cuisines;
        $this->categories = $categories;
    }

    public function isActive(string $route)
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
        return view('components.main.header');
    }
}

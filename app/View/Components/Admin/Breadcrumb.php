<?php

namespace App\View\Components\Admin;

use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public array|object $routes = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $exploded = explode('.', Route::currentRouteName());
        if (count($exploded) === 3) {
            $this->routes = collect([[
                'name' => "$exploded[0].$exploded[1].index",
                'title' => $exploded[1]
            ]]);
            switch ($exploded[2]) {
                case 'create':
                    $this->concatRoutes($exploded, 'create');
                    break;
                case 'show':
                    $this->concatRoutes($exploded, 'show');
                    break;
                case 'edit':
                    $this->concatRoutes($exploded, 'edit');
                    break;
            }
        }
    }

    public function concatRoutes(array $exploded, string $route)
    {
        $this->routes = $this->routes->concat([[
            'name' => "$exploded[0].$exploded[1].$route",
            'title' => $route
        ]]);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.breadcrumb');
    }
}

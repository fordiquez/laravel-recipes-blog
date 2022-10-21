<?php

namespace App\View\Components\Main;

use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public array|object $routes = [];
    public string $title = '';
    public bool $isHome = false;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title)
    {
        $this->title = $title;
        $exploded = explode('.', Route::currentRouteName());
        if (count($exploded) === 3) {
            $this->routes = collect([[
                'name' => "$exploded[0].$exploded[1].index",
                'title' => $exploded[1]
            ]]);
            if ($exploded[2] === 'show') $this->concatRoutes($exploded, 'show');
            if ($exploded[2] === 'create') $this->concatRoutes($exploded, 'create');
            if ($exploded[2] === 'edit') $this->concatRoutes($exploded, 'edit');
        } elseif (count($exploded) === 1) {
            $this->routes = collect([[
                'name' => $exploded[0],
                'title' => $exploded[0]
            ]]);
        } else {
            $this->isHome = true;
        }
    }

    public function concatRoutes(array $exploded, string $action) {
        $this->routes = $this->routes->concat([[
            'name' => "$exploded[0].$exploded[1].$action",
            'title' => $this->title
        ]]);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.main.breadcrumb');
    }
}

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
    public function __construct()
    {
        $exploded = explode('.', Route::currentRouteName());
        if (count($exploded) === 3) {
            $this->title = $exploded[1];
            if ($exploded[2] === 'index') {
                $this->routes = collect([[
                    'name' => "$exploded[0].$exploded[1].index",
                    'title' => $exploded[1]
                ]]);

            }
        } elseif (count($exploded) === 1) {
            $this->title = $exploded[0];
            $this->routes = collect([[
                'name' => $exploded[0],
                'title' => $exploded[0]
            ]]);
        } else {
            $this->isHome = true;
        }
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

<?php

namespace App\View\Components\Main;

use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Recipe;
use App\Models\Tag;
use Illuminate\View\Component;

class Sidebar extends Component
{
    public object|array $latestRecipes = [];
    public object|array $cuisines = [];
    public object|array $categories = [];
    public object|array $tags = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->latestRecipes = Recipe::orderBy('created_at', 'DESC')->get()->take(3);
        $this->cuisines = Cuisine::withCount('recipes')->orderBy('recipes_count', 'DESC')->get()->take(10);
        $this->categories = Category::withCount('recipes')->orderBy('recipes_count', 'DESC')->get()->take(10);
        $this->tags = Tag::withCount('recipes')->orderBy('recipes_count', 'DESC')->get()->take(10);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.main.sidebar');
    }
}

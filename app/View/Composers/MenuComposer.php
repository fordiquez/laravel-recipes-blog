<?php

namespace App\View\Composers;

use App\Models\Category;
use App\Models\Cuisine;
use Illuminate\View\View;

class MenuComposer
{
    public function compose(View $view): void
    {
        $view->with('cuisines', Cuisine::orderby('title', 'asc')->get());
        $view->with('categories', Category::where('parent_id', null)->orderby('title', 'asc')->get());
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CountCard extends Component
{
    public int $count = 0;
    public string $bgIcon = '';
    public string $icon = '';
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($count, $bgIcon, $icon)
    {
        $this->count = $count;
        $this->bgIcon = $bgIcon;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('admin.components.count-card');
    }
}

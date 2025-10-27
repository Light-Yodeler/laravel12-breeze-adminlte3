<?php

namespace App\View\Components\admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class aside extends Component
{
    /**
     * Create a new component instance.
     */
    public $routes;
    public function __construct()
    {
        $this->routes = [
            [
                'route_name'    => 'dashboard',
                'route_active'  => 'dashboard',
                'icon'          => 'fas fa-th',
                'label'         => 'Dashboard',
                'is_dropdown'   => false,
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.aside');
    }
}

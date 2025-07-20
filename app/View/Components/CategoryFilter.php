<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryFilter extends Component
{
    public $categories;
    public $action;
    /**
     * Create a new component instance.
     */
    public function __construct($categories, $action = null)
    {
        $this->categories = $categories;
        $this->action = $action ?? route('products.index');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category-filter');
    }
}

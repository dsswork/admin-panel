<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class SelectCategory extends Component
{
    public $categories;
    public $categoryId;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($categoryId = null)
    {
        $this->categories = Category::orderBy('sort')->get();
        $this->categoryId = $categoryId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select-category');
    }
}

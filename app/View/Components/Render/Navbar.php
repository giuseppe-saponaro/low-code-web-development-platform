<?php

namespace App\View\Components\Render;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Node as NodeModel;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public NodeModel $selectedNode
        )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.render.navbar');
    }
}

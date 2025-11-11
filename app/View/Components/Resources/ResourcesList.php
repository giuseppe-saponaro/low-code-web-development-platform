<?php

namespace App\View\Components\Resources;


use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ResourcesList extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $resources
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.resources.resources-list');
    }
}

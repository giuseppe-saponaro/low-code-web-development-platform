<?php

namespace App\View\Components\Resources;


use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Resource as ResourceModel;

class Resource extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ResourceModel $selectedResource
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.resources.resource');
    }
}

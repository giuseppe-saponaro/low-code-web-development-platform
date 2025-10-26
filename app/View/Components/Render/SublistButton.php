<?php

namespace App\View\Components\Render;

use App\Models\HtmlSharingSelect;
use App\Models\Node as NodeModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Request;
use Illuminate\View\Component;

class SublistButton extends Component
{

    /**
     * Create a new component instance.
     */
    public function __construct(
        public NodeModel $selectedNode
    )
    {


    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.render.sublist-button');
    }
}

<?php

namespace App\View\Components\Nodes;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Node as NodeModel;

class NavLink extends Component
{
    
    public $nodes;
    
    /**
     * Create a new component instance.
     */
    public function __construct(
        public NodeModel $selectedNode
        )
    {        
        
        $this->nodes = NodeModel::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nodes.nav-link');
    }
}

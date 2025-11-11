<?php

namespace App\View\Components\Nodes;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Utilities\HtmlNodeTypes;

class Node extends Component
{

    public $Utility;

    public $nodeFormComponent;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public \App\Models\Node $selectedNode
        )
    {

        $this->Utility = HtmlNodeTypes::class;

        $type = HtmlNodeTypes::getSectedNodeType($this->selectedNode);

        if ($type) {
            $this->nodeFormComponent = HtmlNodeTypes::getValues()[$type]["form-component"];
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nodes.node');
    }
}

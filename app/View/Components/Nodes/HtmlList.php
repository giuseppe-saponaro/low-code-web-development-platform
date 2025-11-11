<?php

namespace App\View\Components\Nodes;

use App\Models\Node as NodeModel;
use App\Models\Nodes\HtmlForm;
use App\Models\Nodes\HtmlSelect;
use App\Models\Nodes\HtmlSharingSelect;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class HtmlList extends Component
{
    public $formNodes;

    public $nodes;

    public $filters;




    /**
     * Create a new component instance.
     */
    public function __construct(
        public \App\Models\Node $selectedNode
        )
    {



        $this->formNodes = NodeModel::whereHasMorph(
            'html',
            [HtmlForm::class]
            )->get();

        $this->nodes = [];

        if ($this->selectedNode->html->binding_id) {
            $this->filters = NodeModel::whereHasMorph("html", [HtmlSelect::class, HtmlSharingSelect::class])
                ->where("parent_id", $this->selectedNode->html->binding->node->id)->get();
            $this->nodes = NodeModel::where("parent_id", $this->selectedNode->html->binding->node->id)->get();
        }


    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nodes.html-list');
    }
}

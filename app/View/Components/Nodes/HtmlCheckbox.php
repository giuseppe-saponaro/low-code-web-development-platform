<?php

namespace App\View\Components\Nodes;

use App\Models\Field as FieldModel;
use App\Models\FieldTypes\BooleanField;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HtmlCheckbox extends Component
{


    public $fields;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public \App\Models\Node $selectedNode
    )
    {

        $this->fields = FieldModel::whereHasMorph(
            'withType',
            [BooleanField::class]
        )->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nodes.html-checkbox');
    }
}

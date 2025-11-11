<?php

namespace App\View\Components\Nodes;

use App\Models\Field;
use App\Models\FieldTypes\EnumField;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HtmlStaticSelect extends Component
{



    public $fields;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public \App\Models\Node $selectedNode
    )
    {

        $this->fields = Field::whereHasMorph(
            'withType',
            [EnumField::class]
        )->get();



    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nodes.html-static-select');
    }
}

<?php

namespace App\View\Components\Nodes;

use App\Models\Field as FieldModel;
use App\Models\FieldTypes\DateTimeField;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HtmlDateTime extends Component
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
            [DateTimeField::class]
        )->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nodes.html-date-time');
    }
}

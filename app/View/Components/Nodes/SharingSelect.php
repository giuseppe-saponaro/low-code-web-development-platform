<?php

namespace App\View\Components\Nodes;

use App\Models\Field as FieldModel;
use App\Models\FieldTypes\FKField;
use App\Models\FieldTypes\IntegerField;
use App\Models\SvIntegerField;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SharingSelect extends Component
{

    public $fields;
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $selectedNode
        )
    {


        $this->fields = FieldModel::whereHasMorph(
            'withType',
            [FKField::class]
        )->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nodes.sharing-select');
    }
}

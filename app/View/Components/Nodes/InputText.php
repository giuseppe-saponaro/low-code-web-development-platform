<?php

namespace App\View\Components\Nodes;

use App\Models\Field as FieldModel;
use App\Models\FieldTypes\FloatField;
use App\Models\FieldTypes\IntegerField;
use App\Models\FieldTypes\StringField;
use App\Models\FieldTypes\SvStringField;
use App\Models\SvFloatField;
use App\Models\SvIntegerField;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class InputText extends Component
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
            [FloatField::class, IntegerField::class, StringField::class]
        )->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nodes.input-text');
    }
}

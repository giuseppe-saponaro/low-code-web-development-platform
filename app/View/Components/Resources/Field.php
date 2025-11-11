<?php

namespace App\View\Components\Resources;

use App\Utilities\FieldTypes;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Field as FieldModel;

class Field extends Component
{
    public $Utility;

    public $fieldFormComponent;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public FieldModel $selectedField
        )
    {
        $this->Utility = FieldTypes::class;

        $type = FieldTypes::getSectedFieldType($this->selectedField);

        if ($type) {
            $this->fieldFormComponent = FieldTypes::getValues()[$type]["form-component"];
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.resources.field');
    }


}

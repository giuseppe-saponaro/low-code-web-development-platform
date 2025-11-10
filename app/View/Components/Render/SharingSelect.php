<?php

namespace App\View\Components\Render;

use App\Utilities\Menu;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Sharing;
use App\Models\Node as NodeModel;
use App\Utilities\FieldTypes;
use App\Utilities\Permission;

class SharingSelect extends Component
{

    public $sharings;
    public $value;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public NodeModel $selectedNode
        )
    {

        $this->sharings = Sharing::all();


        $row = Menu::getRow();

        if ($row) {
            $genericValue = $this->selectedNode->html->binding->values($row)->first();
            if ($genericValue) {
                $value = $genericValue->withValue;

                if ($value) {
                    $this->value =  $value->value;
                }
            }
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.render.sharing-select');
    }
}

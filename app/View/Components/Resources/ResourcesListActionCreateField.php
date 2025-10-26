<?php

namespace App\View\Components\Resources;

use App\Utilities\FieldTypes;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\App as AppModel;
use App\Models\Resource as ResourceModel;

class ResourcesListActionCreateField extends Component
{
    
    public $Utility;
    
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ResourceModel $selectedResource
    )
    {
        $this->Utility = FieldTypes::class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.resources.resources-list-action-create-field');
    }
}

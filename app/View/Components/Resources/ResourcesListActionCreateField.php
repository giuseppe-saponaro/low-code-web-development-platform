<?php

namespace App\View\Components\Resources;

use App\Utilities\FieldTypes;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Resource as ResourceModel;

class ResourcesListActionCreateField extends Component
{

    /**
     * Create a new component instance.
     */
    public function __construct(
        public ResourceModel $selectedResource
    )
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.resources.resources-list-action-create-field');
    }
}

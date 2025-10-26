<?php

namespace App\View\Components\Sharings;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Node as NodeModel;
use App\Models\Role as RoleModel;

class SharingNode extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public RoleModel $selectedRole,
        public NodeModel $node
        )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sharings.sharing-node');
    }
}

<?php

namespace App\View\Components\Roles;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Role as RoleModel;
use App\Models\Node as NodeModel;

class RoleNode extends Component
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
        return view('components.roles.role-node');
    }
}

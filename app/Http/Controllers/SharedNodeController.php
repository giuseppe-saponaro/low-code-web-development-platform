<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Node;
use App\Models\Role;
use App\Models\Sharing;
use Illuminate\Http\Request;
use App\Models\SharedNode;

class SharedNodeController extends Controller
{

    public function store(Role $role, Node $node) {
        
        $sharedNode = new SharedNode;
        $sharedNode->role_id = $role->id;
        $sharedNode->node_id = $node->id;
        $sharedNode->can_create = true;
        $sharedNode->can_read = true;
        $sharedNode->can_update = true;
        $sharedNode->can_delete = true;
        $sharedNode->save();
        
        return redirect("/roles/$role->id");
        
    }

    public function update(SharedNode $sharedNode) {
  
        $sharedNode->can_create = request()->can_create === "on"?1:0;
        $sharedNode->can_read = request()->can_read === "on"?1:0;
        $sharedNode->can_update = request()->can_update === "on"?1:0;
        $sharedNode->can_delete = request()->can_delete === "on"?1:0;
        $sharedNode->save();
        
        $role = $sharedNode->role;
        
        return redirect("/roles/$role->id");
        
    }
    
}

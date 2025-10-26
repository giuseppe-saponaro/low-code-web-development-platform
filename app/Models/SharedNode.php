<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SharedNode extends Model
{
    
    protected $table = "shared_nodes";
    
    public function role() : BelongsTo {
        return $this->belongsTo(Role::class, "role_id", "id");
    }
    
    public function node() : BelongsTo {
        return $this->belongsTo(Node::class, "node_id", "id");
    }
    
}

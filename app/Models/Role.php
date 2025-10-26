<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    protected $table = "roles";
    

    public function app() : BelongsTo {
        return $this->belongsTo(App::class, "app_id", "id");
    }
    
    public function sharedNodes() : HasMany {
        return $this->hasMany(SharedNode::class, "role_id", "id");
    }
    
    public function sharedNode($node) {
        return $this->hasMany(SharedNode::class, "role_id", "id")->where("node_id", $node->id)->first();
    }
}

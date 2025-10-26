<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class BootstrapNavLink extends Model
{
    protected $table = "bootstrap_nav_links";
    
    public function node(): MorphOne
    {
        return $this->morphOne(Node::class, 'html');
    }
    
    public function ref() : BelongsTo {
        return $this->belongsTo(Node::class, "ref_id", "id");
    }
}
    
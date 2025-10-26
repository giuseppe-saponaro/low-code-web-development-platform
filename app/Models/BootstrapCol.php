<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BootstrapCol extends Model
{

    protected $table = "bootstrap_cols";
    
    public function node(): MorphOne
    {
        return $this->morphOne(Node::class, 'html');
    }
    
}

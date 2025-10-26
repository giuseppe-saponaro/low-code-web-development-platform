<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BootstrapRow extends Model
{

    protected $table = "bootstrap_rows";
    
    public function node(): MorphOne
    {
        return $this->morphOne(Node::class, 'html');
    }
    
}

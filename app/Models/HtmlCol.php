<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class HtmlCol extends Model
{
    
    
    protected $table = "bootstrap_cols";
    
    public function node(): MorphOne
    {
        return $this->morphOne(Node::class, 'html');
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class HtmlRow extends Model
{

    protected $table = "bootstrap_rows";
    
    public function node(): MorphOne
    {
        return $this->morphOne(Node::class, 'html');
    }
    
}

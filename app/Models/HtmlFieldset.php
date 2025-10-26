<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class HtmlFieldset extends Model
{

    protected $table = "html_fieldsets";
    
    public function node(): MorphOne
    {
        return $this->morphOne(Node::class, 'html');
    }
    
}

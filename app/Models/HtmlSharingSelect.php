<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class HtmlSharingSelect extends Model
{

    protected $table = "html_sharing_selects";
    
    public function node(): MorphOne
    {
        return $this->morphOne(Node::class, 'html');
    }
    
    public function binding() : BelongsTo {
        
        return $this->belongsTo(Field::class, "binding_id", "id");
        
    }
    
}

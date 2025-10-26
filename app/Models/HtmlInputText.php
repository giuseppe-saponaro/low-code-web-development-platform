<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class HtmlInputText extends Model
{

    
    protected $table = "html_input_texts";
    
    public function node(): MorphOne
    {
        return $this->morphOne(Node::class, 'html');
    }
    
    public function binding() : BelongsTo {
        
        return $this->belongsTo(Field::class, "binding_id", "id");
        
    }
    
}

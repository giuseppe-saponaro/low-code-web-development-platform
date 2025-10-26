<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BootstrapNavbar extends Model
{

    protected $table = "bootstrap_navbars";
    
    public function node(): MorphOne
    {
        return $this->morphOne(Node::class, 'html');
    }
    

    
}

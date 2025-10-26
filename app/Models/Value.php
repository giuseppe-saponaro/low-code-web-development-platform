<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Value extends Model
{

    protected $table = "values";

    public function withValue(): MorphTo
    {
        return $this->morphTo();
    }

}

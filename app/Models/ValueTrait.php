<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait ValueTrait {

    public function value(): MorphOne
    {
        return $this->morphOne(Value::class, 'with_value');
    }



}

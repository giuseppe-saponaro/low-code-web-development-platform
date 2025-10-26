<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphOne;
use Value;

trait FieldTrait
{

    public function field(): MorphOne
    {
        return $this->morphOne(Field::class, 'with_type');
    }

}

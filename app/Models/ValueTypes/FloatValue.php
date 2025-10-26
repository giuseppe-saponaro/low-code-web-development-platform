<?php

namespace App\Models\ValueTypes;

use Illuminate\Database\Eloquent\Model;

class FloatValue extends Model
{

    use \App\Models\ValueTrait;

    protected $table = "float_values";

}

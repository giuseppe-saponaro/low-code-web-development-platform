<?php

namespace App\Models\ValueTypes;

use App\Models\Field;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class BooleanValue extends Model
{

    use \App\Models\ValueTrait;

    protected $table = "boolean_values";

}

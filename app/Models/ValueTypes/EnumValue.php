<?php

namespace App\Models\ValueTypes;

use Illuminate\Database\Eloquent\Model;

class EnumValue extends Model
{
    use \App\Models\ValueTrait;

    protected $table = "enum_values";
}

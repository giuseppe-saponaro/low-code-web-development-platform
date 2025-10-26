<?php

namespace App\Models\ValueTypes;

use Illuminate\Database\Eloquent\Model;

class StringValue extends Model
{

    use \App\Models\ValueTrait;

    protected $table = "string_values";
}

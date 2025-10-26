<?php

namespace App\Models\ValueTypes;

use Illuminate\Database\Eloquent\Model;


class IntegerValue extends Model
{

    use \App\Models\ValueTrait;

    protected $table = "integer_values";

}

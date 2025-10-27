<?php

namespace App\Models\ValueTypes;

use Illuminate\Database\Eloquent\Model;

class DateValue extends Model
{
    use \App\Models\ValueTrait;

    protected $table = "date_values";
}

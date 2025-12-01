<?php

namespace App\Models\ValueTypes;

use Illuminate\Database\Eloquent\Model;

class TimestampValue extends Model
{

    use \App\Models\ValueTrait;

    protected $table = "timestamp_values";

}

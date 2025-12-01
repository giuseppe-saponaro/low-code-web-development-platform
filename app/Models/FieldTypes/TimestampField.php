<?php

namespace App\Models\FieldTypes;

use App\Models\FieldTrait;
use App\Models\ValueTypes\TimestampValue;
use App\Models\ValueTypes\TimeValue;
use Illuminate\Database\Eloquent\Model;

class TimestampField extends Model
{

    use FieldTrait;

    protected $table = "timestamp_fields";

    public function getValueClass() {
        return TimestampValue::class;
    }
}

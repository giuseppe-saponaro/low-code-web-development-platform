<?php

namespace App\Models\FieldTypes;

use App\Models\FieldTrait;
use App\Models\ValueTypes\DateValue;
use Illuminate\Database\Eloquent\Model;

class DateField extends Model
{
    use FieldTrait;

    protected $table = "date_fields";

    public function getValueClass() {
        return DateValue::class;
    }
}

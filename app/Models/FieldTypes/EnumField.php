<?php

namespace App\Models\FieldTypes;

use App\Models\FieldTrait;
use App\Models\ValueTypes\BooleanValue;
use App\Models\ValueTypes\EnumValue;
use Illuminate\Database\Eloquent\Model;

class EnumField extends Model
{
    use FieldTrait;

    protected $table = "enum_fields";

    public function getValueClass() {
        return EnumValue::class;
    }
}

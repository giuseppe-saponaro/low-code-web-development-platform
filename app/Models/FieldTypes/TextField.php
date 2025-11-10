<?php

namespace App\Models\FieldTypes;

use App\Models\FieldTrait;
use App\Models\ValueTypes\TextValue;
use Illuminate\Database\Eloquent\Model;

class TextField extends Model
{

    use FieldTrait;

    protected $table = "text_fields";

    public function getValueClass() {
        return TextValue::class;
    }

}

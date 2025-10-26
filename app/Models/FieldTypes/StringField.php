<?php

namespace App\Models\FieldTypes;

use App\Models\Field;
use App\Models\FieldTrait;
use App\Models\ValueTypes\StringValue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class StringField extends Model
{

    use FieldTrait;

    protected $table = "string_fields";

    public function getValueClass() {
        return StringValue::class;
    }
}

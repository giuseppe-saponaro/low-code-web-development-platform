<?php

namespace App\Models\FieldTypes;

use App\Models\Field;
use App\Models\FieldTrait;
use App\Models\ValueTypes\FloatValue;
use App\Models\ValueTypes\IntegerValue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class IntegerField extends Model
{

    use FieldTrait;

    protected $table = "integer_fields";
    public function getValueClass() {
        return IntegerValue::class;
    }
}

<?php

namespace App\Models\FieldTypes;

use App\Models\Field;
use App\Models\FieldTrait;
use App\Models\ValueTypes\FKValue;
use App\Models\ValueTypes\FloatValue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;


class FloatField extends Model
{

    use FieldTrait;

    protected $table = "float_fields";


    public function getValueClass() {
        return FloatValue::class;
    }

}

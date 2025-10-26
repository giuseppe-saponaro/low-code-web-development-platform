<?php

namespace App\Models\FieldTypes;

use App\Models\Field;
use App\Models\FieldTrait;
use App\Models\Row;
use App\Models\Value;
use App\Models\ValueTypes\BooleanValue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class BooleanField extends Model
{

    use FieldTrait;

    protected $table = "boolean_fields";

    public function getValueClass() {
        return BooleanValue::class;
    }

}

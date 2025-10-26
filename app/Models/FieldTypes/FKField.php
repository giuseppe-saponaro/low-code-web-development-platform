<?php

namespace App\Models\FieldTypes;

use App\Models\Field;
use App\Models\FieldTrait;
use App\Models\ValueTypes\BooleanValue;
use App\Models\ValueTypes\FKValue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class FKField extends Model
{

    use FieldTrait;

    protected $table = "f_k_fields";

    public function getValueClass() {
        return FKValue::class;
    }


}

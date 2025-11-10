<?php

namespace App\Models\ValueTypes;

use Illuminate\Database\Eloquent\Model;

class TextValue extends Model
{

    use \App\Models\ValueTrait;

    protected $table = "text_values";

}

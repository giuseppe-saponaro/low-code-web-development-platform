<?php

namespace App\Models\ValueTypes;

use Illuminate\Database\Eloquent\Model;


class FKValue extends Model
{
    use \App\Models\ValueTrait;

    protected $table = "f_k_values";
}

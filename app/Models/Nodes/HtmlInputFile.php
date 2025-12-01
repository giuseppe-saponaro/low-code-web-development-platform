<?php

namespace App\Models\Nodes;

use App\Models\Field;
use App\Models\NodeTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HtmlInputFile extends Model
{

    use NodeTrait;

    protected $table = "html_input_files";

    public function binding() : BelongsTo {

        return $this->belongsTo(Field::class, "binding_id", "id");

    }

    public function transformInput($inputValue) {
        $timestamp = time();
        return $inputValue?$timestamp:null;
    }

}

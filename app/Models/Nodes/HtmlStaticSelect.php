<?php

namespace App\Models\Nodes;

use App\Models\Field;
use App\Models\Node;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class HtmlStaticSelect extends Model
{
    protected $table = "html_static_selects";

    public function node(): MorphOne
    {
        return $this->morphOne(Node::class, 'html');
    }

    public function binding() : BelongsTo {

        return $this->belongsTo(Field::class, "binding_id", "id");

    }
}

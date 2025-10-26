<?php

namespace App\Models\Nodes;

use App\Models\Field;
use App\Models\HtmlList;
use App\Models\Node;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class SublistButton extends Model
{


    protected $table = "sublist_buttons";

    public function node(): MorphOne
    {
        return $this->morphOne(Node::class, 'html');
    }

    public function listBinding() : BelongsTo {

        return $this->belongsTo(HtmlList::class, "list_binding_id", "id");

    }
}

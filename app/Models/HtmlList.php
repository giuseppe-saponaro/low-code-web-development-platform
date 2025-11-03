<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HtmlList extends Model
{
    protected $table = "html_lists";

    public function node(): MorphOne
    {
        return $this->morphOne(Node::class, 'html');
    }

    public function node1() : BelongsTo {
        return $this->belongsTo(Node::class, "node_id1", "id");
    }

    public function node2() : BelongsTo {
        return $this->belongsTo(Node::class, "node_id2", "id");
    }

    public function binding() : BelongsTo {
        return $this->belongsTo(HtmlForm::class, "binding_id", "id");
    }

    public function defaultFilterBinding() : BelongsTo {
        return $this->belongsTo(Node::class, "default_filter_binding_id", "id");
    }

}

<?php

namespace App\Models;

use App\Models\ValueTypes\FKValue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class HtmlForm extends Model
{

    protected $table = "html_forms";

    public function node(): MorphOne
    {
        return $this->morphOne(Node::class, 'html');
    }


    public function rows() {
        return $this->hasMany(Row::class, "form_id", "id");
    }

    public function row($id): HasOne {
        return $this->hasOne(Row::class, "form_id", "id")->where("rows.id", $id);
    }

    public function filteredRows($value) {

        if ($value) {
            return $this->hasMany(Row::class, "form_id", "id")->whereHas("values", function($query) use ($value) {
                $query->whereHasMorph("withValue", [FKValue::class], function($query) use ($value) {
                    $query->where("value", $value);
                });
            })->get();
        } else {
            return $this->rows()->get();
        }

    }

}

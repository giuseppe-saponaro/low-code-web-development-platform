<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Invite extends Model
{

    protected $table = "invites";

    public function sharing(): MorphOne
    {
        return $this->morphOne(Node::class, 'sharing_type');
    }

}

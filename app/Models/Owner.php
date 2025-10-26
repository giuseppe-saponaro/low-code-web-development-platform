<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Owner extends Model
{


    protected $table = "owners";

    public function user(): MorphOne
    {
        return $this->morphOne(User::class, 'loggable');
    }


    /*

    public function apps() : BelongsToMany {
        return $this->belongsToMany(App::class, "owner_apps", "owner_id", "app_id");
    }

    public function ownerApps() : HasMany {
        return $this->hasMany(OwnerApp::class, "owner_id", "id");
    }

    public function ownerApp($app) {
        return $this->hasMany(OwnerApp::class, "owner_id", "id")->where("app_id", $app->id)->first();
    }
    */

}

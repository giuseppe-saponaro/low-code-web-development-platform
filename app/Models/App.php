<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class App extends Model
{

    protected $table = "apps";

    public function resources(): HasMany
    {
        return $this->hasMany(Resource::class, "app_id", "id");
    }

    public function rootNodes(): HasMany {
        return $this->hasMany(Node::class, "app_id", "id")->whereNull("parent_id");
    }

    public function sharings() : HasMany {
        return $this->hasMany(Sharing::class, "app_id", "id");
    }

    public function starts() : HasMany {
        return $this->hasMany(Node::class, "app_id", "id")->whereHasMorph(
            'html',
            [BootstrapNavbar::class]
        );
    }

    public function roles() : HasMany {
        return $this->hasMany(Role::class, "app_id", "id");
    }






    /*
    public function owner() : BelongsToMany {

        return $this->belongsToMany(RegisteredUser::class, "owner_apps", "app_id", "owner_id");
        ;
    }
    */

    /*
    public function rows() {
        return $this->hasMany(Row::class, "app_id", "id");
    }

    public function authRows($value, $field) {

        return $this->hasMany(Row::class, "app_id", "id")->whereHas("svIntegerValues", function($query) use ($value, $field) {
            $query->whereHas("field", function($query) use ($field){
                $query->where("id", $field->withType->n->id);
            })->where("value", $value);
        })->get();
    }

    */



}

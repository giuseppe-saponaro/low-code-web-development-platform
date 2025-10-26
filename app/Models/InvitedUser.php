<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class InvitedUser extends Model
{

    protected $table = "invited_users";

    public function user(): MorphOne
    {
        return $this->morphOne(User::class, 'loggable');
    }

    public function app($sharingId) {

        $app = null;

        if ($sharingId) {

            $sharing = Sharing::whereHasMorph(
                'sharingType',
                [Invite::class],
                function($query) {
                    $query->where('email', $this->user->email);
                }
                )->where("id", $sharingId)->first();

                $app = $sharing->app;

        }

        return $app;
    }






}

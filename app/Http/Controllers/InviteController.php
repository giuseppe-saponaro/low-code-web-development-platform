<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Sharing;
use App\Models\Invite;
use Illuminate\Support\Facades\Cookie;

class InviteController extends Controller
{

    public function index() {

        $sharings = Sharing::whereHasMorph(
            'sharingType',
            [Invite::class],
            function($query) {
                $query->where('email', Auth::user()->email);
            }
        )->get();

        $selected = Sharing::whereHasMorph(
            'sharingType',
            [Invite::class],
            function($query) {
                $query->where('email', Auth::user()->email);
            }
        )->where("id", Cookie::get("sharing_id"))->first();

        return view("components.invites", [
            "sharings" => $sharings,
            "selected" => $selected
        ]);
    }

    public function select(Sharing $sharing) {

        Cookie::queue("sharing_id", $sharing->id);

        $menu = $sharing->app->starts[0];

        return redirect("/render/$menu->id");

    }

}

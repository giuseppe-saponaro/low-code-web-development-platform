<?php

namespace App\Http\Controllers;

use App\Models\InvitedUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index() {

        $users = User::whereHasMorph(
            'loggable',
            [InvitedUser::class]
        )->get();

        return view("components.users.users", [
            "users" => $users
        ]);

    }

    public function store() {

        $user = new User();
        $user->name = request()->name;
        $user->email = request()->email;
        $user->password = Hash::make(request()->password);
        $user->save();

        $invitedUser = new InvitedUser();
        $invitedUser->save();

        $invitedUser->user()->save($user);

        return redirect("/users");

    }


    public function edit(User $user) {

        $users = User::whereHasMorph(
            'loggable',
            [InvitedUser::class]
        )->get();

        return view("components.users.users", [
            "selectedUser" => $user,
            "users" => $users
        ]);

    }

    public function update(User $user) {

        $user->name = request()->name;
        $user->email = request()->email;
        $user->password = Hash::make(request()->password);
        $user->save();

        return redirect("/users/$user->id");

    }

    public function delete(User $user) {
        $user->delete();
    }

}

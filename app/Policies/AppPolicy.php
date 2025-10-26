<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\App;
use App\Models\User;


class AppPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    
    
    public function appIndex(): Response
    {
        return Response::allow();
    }
    
    public function appStore(): Response
    {
        return Response::allow();
    }
    
    public function appEdit(User $user, App $app): Response
    {

        return $app->user_id === $user->id
            ? Response::allow()
            : Response::deny();
    }
    
    public function appUpdate(User $user, App $app): Response
    {
        
        return $app->user_id === $user->id
        ? Response::allow()
        : Response::deny();
    }
    
    public function appDelete(User $user, App $app): Response
    {
        
        return $app->user_id === $user->id
        ? Response::allow()
        : Response::deny();
    }
    
}

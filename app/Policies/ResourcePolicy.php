<?php

namespace App\Policies;

use App\Models\App;
use App\Models\Resource;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ResourcePolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    
    
    public function resourceIndex(User $user, App $app): Response
    {
        return $app->user_id === $user->id
        ? Response::allow()
        : Response::deny();
    }
    
    public function resourceStore(User $user, App $app): Response
    {
        return $app->user_id === $user->id
        ? Response::allow()
        : Response::deny();
    }
    
    public function resourceEdit(User $user, Resource $resource): Response
    {
        
        return ($resource->app->user_id === $user->id)
        ? Response::allow()
        : Response::deny();
    }
    
    public function resourceUpdate(User $user, Resource $resource): Response
    {
        
        return ($resource->app->user_id === $user->id)
        ? Response::allow()
        : Response::deny();
    }
    
    public function resourceDelete(User $user, Resource $resource): Response
    {
        
        return ($resource->app->user_id === $user->id)
        ? Response::allow()
        : Response::deny();
    }
}

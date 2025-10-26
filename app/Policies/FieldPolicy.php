<?php

namespace App\Policies;

use App\Models\App;
use App\Models\Resource;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use App\Models\Field;

class FieldPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    
    public function fieldStore(User $user, Resource $resource): Response
    {
        return ($resource->app->user_id === $user->id)
        ? Response::allow()
        : Response::deny();
    }
    
    public function fieldEdit(User $user, Field $field): Response
    {
        
        return ($field->resource->app->user_id === $user->id)
        ? Response::allow()
        : Response::deny();
    }
    
    public function fieldUpdate1(User $user, Field $field): Response
    {
        return ($field->resource->app->user_id === $user->id)
        ? Response::allow()
        : Response::deny();
    }
    
    public function fieldUpdateBoolean2(User $user, Field $field): Response
    {
        return ($field->resource->app->user_id === $user->id)
        ? Response::allow()
        : Response::deny();
    }
    
    public function fieldUpdateEnum2(User $user, Field $field): Response
    {
        return ($field->resource->app->user_id === $user->id)
        ? Response::allow()
        : Response::deny();
    }
    
    public function fieldUpdateFloat2(User $user, Field $field): Response
    {
        return ($field->resource->app->user_id === $user->id)
        ? Response::allow()
        : Response::deny();
    }
    
    public function fieldUpdateInteger2(User $user, Field $field): Response
    {
        return ($field->resource->app->user_id === $user->id)
        ? Response::allow()
        : Response::deny();
    }
    
    public function fieldUpdateString2(User $user, Field $field): Response
    {
        return ($field->resource->app->user_id === $user->id)
        ? Response::allow()
        : Response::deny();
    }
    
    public function fieldDelete(User $user, Field $field): Response
    {
        return ($field->resource->app->user_id === $user->id)
        ? Response::allow()
        : Response::deny();
    }
}

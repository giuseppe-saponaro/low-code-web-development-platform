<?php

namespace App\Policies;

use App\Models\App;
use App\Models\Node;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use App\Models\Row;

class RowPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    
    
    public function rowStore(User $user, Node $node): Response
    {
        
        return $node->app->user_id === $user->id
        ? Response::allow()
        : Response::deny();
    }
    
    public function rowUpdate(User $user, Row $row): Response
    {
        
        return $row->form->node->app->user_id === $user->id
        ? Response::allow()
        : Response::deny();
    }
    
    public function rowDelete(User $user, Row $row): Response
    {
        
        return $row->form->node->app->user_id === $user->id
        ? Response::allow()
        : Response::deny();
    }
}

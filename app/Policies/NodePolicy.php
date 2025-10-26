<?php

namespace App\Policies;

use App\Models\App;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use App\Models\Node;

class NodePolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    
    
    public function nodeIndex(User $user, App $app): Response
    {
        return $app->user_id === $user->id
        ? Response::allow()
        : Response::deny();
    }
    
    public function nodeStore(User $user, App $app): Response
    {
        return $app->user_id === $user->id
        ? Response::allow()
        : Response::deny();
    }
    
    public function nodeEdit(User $user, Node $node): Response
    {
        
        return $node->app->user_id === $user->id
        ? Response::allow()
        : Response::deny();
    }
    
    public function nodeUpdate(User $user, Node $node): Response
    {
        
        return $node->app->user_id === $user->id
        ? Response::allow()
        : Response::deny();
    }
    
    public function nodeDelete(User $user, Node $node): Response
    {
        
        return $node->app->user_id === $user->id
        ? Response::allow()
        : Response::deny();
    }
    
    public function nodeStoreChild(User $user, Node $node): Response
    {
        
        return $node->app->user_id === $user->id
        ? Response::allow()
        : Response::deny();
    }
    
    public function nodeUpdateInputText(User $user, Node $node): Response
    {
        
        return $node->app->user_id === $user->id
        ? Response::allow()
        : Response::deny();
    }
    
    public function nodeUpdateNavLink(User $user, Node $node): Response
    {
        
        return $node->app->user_id === $user->id
        ? Response::allow()
        : Response::deny();
    }
    
    public function nodeUpdateHtmlList(User $user, Node $node): Response
    {
        
        return $node->app->user_id === $user->id
        ? Response::allow()
        : Response::deny();
    }
    
    public function nodeRender(User $user, Node $node): Response
    {
        
        return $node->app->user_id === $user->id
        ? Response::allow()
        : Response::deny();
    }
}

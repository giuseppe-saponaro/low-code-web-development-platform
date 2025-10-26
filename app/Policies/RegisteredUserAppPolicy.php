<?php

namespace App\Policies;

use App\Models\Sharing;
use App\Models\User;
use App\Models\RegisteredUserApp;
use Illuminate\Auth\Access\Response;

class RegisteredUserAppPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    
    
    public function view(User $user, RegisteredUserApp $registeredUserApp): Response
    {

        return $registeredUserApp->registered_user_id === $user->userType->id
        ? Response::allow()
        : Response::deny();
    }
    
    public function store(User $user, RegisteredUserApp $registeredUserApp): Response
    {
        
        return $registeredUserApp->registered_user_id === $user->userType->id
        ? Response::allow()
        : Response::deny();
    }
    
    public function editSharing(User $user, Sharing $sharing): Response
    {
        
        return $sharing->registeredUserApp->registered_user_id === $user->userType->id
        ? Response::allow()
        : Response::deny();
    }
    
    public function updateSharing(User $user, Sharing $sharing): Response
    {
        
        return $sharing->registeredUserApp->registered_user_id === $user->userType->id
        ? Response::allow()
        : Response::deny();
    }
    
    public function updateSharing2(User $user, Sharing $sharing): Response
    {
        
        return $sharing->registeredUserApp->registered_user_id === $user->userType->id
        ? Response::allow()
        : Response::deny();
    }
}

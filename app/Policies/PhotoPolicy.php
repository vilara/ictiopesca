<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Photo;

class PhotoPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    
    public function editPhoto(User $user, Photo $photo){
        return $user->id === $photo->user_id;
    }
    
   
}

<?php

namespace App\Policies;

use App\Pesc_localidade;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PescLocalidadePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Pesc_localidade  $pescLocalidade
     * @return mixed
     */
    public function view(User $user, Pesc_localidade $pescLocalidade)
    {
        return $user->id >0 && $pescLocalidade->id > 0;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Pesc_localidade  $pescLocalidade
     * @return mixed
     */
    public function update(User $user, Pesc_localidade $pescLocalidade)
    {
       
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Pesc_localidade  $pescLocalidade
     * @return mixed
     */
    public function delete(User $user, Pesc_localidade $pescLocalidade)
    {

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Pesc_localidade  $pescLocalidade
     * @return mixed
     */
    public function restore(User $user, Pesc_localidade $pescLocalidade)
    {

    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Pesc_localidade  $pescLocalidade
     * @return mixed
     */
    public function forceDelete(User $user, Pesc_localidade $pescLocalidade)
    {

    }
}

<?php

namespace App\Policies;

use App\Models\CatagoryList;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CatagoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CatagoryList  $catagoryList
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, CatagoryList $catagoryList)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return  $user->role === 'admin';
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CatagoryList  $catagoryList
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, CatagoryList $catagoryList)
    {
        return  $user->role === 'admin';
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CatagoryList  $catagoryList
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, CatagoryList $catagoryList)
    {
        return  $user->role === 'admin';
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CatagoryList  $catagoryList
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, CatagoryList $catagoryList)
    {
        return  $user->role === 'admin';
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CatagoryList  $catagoryList
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, CatagoryList $catagoryList)
    {
        return  $user->role === 'admin';
    }
}

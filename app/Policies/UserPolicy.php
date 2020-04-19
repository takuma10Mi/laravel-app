<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Auth; # 追加
class UserPolicy
{
    use HandlesAuthorization;

    /**
        * Determine whether the user can view the model.
        *
        * @param  \App\User  $user
        * @return mixed
        */
    public function view(User $user)
    {
        return Auth::id() == $user->id;
    }

    /**
        * Determine whether the user can update the model.
        *
        * @param  \App\User  $user
        * @return mixed
        */
    public function update(User $user)
    {
        return Auth::id() == $user->id;
    }
}
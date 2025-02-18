<?php

namespace App\Policies;

use App\Models\Game;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class GamePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        if ($user->role_id == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function showMine(User $user, Game $game): bool {
        return $user->id === $game->id;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Game $game): bool
    {
        return $user->id === $game->id;
        /* if ($user->id === $game->id) {
            return true;
        }
        else {
            return false;
        } */
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if ($user->role_id === 1) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Game $game): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Game $game): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Game $game): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Game $game): bool
    {
        return false;
    }

    public function before(User $user): bool|null {
        if ($user->role_id == 3) { // 3-as id a SUPERADMINDEVELOPER MINDENES
            return true;
        }
        else {
            return null;
        }
    
    }
}

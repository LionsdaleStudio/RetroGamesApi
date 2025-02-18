<?php

namespace App\Observers;

use App\Models\Game;

class GameObserver
{
    /**
     * Handle the Game "created" event.
     */
    public function created(Game $game): void
    {
        //
    }

    /**
     * Handle the Game "updated" event.
     */
    public function updated(Game $game): void
    {
        //
    }

    /**
     * Handle the Game "deleted" event.
     */
    public function deleted(Game $game): void
    {
        //
    }

    /**
     * Handle the Game "restored" event.
     */
    public function restored(Game $game): void
    {
        //
    }

    /**
     * Handle the Game "force deleted" event.
     */
    public function forceDeleted(Game $game): void
    {
        //
    }
}

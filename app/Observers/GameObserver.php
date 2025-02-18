<?php

namespace App\Observers;

use App\Models\Game;

class GameObserver
{
    /**
     * Handle the Game "created" event. Akkor fut le, ha már elkészült a modell.
     * Itt a mentés miatt egyből lesz egy update is.
     */
    public function created(Game $game): void
    {
        if (auth()->check()) {
            $game->created_by = auth()->user()->id;
            $game->save();
        }
    }

    /**
     * Handle the Game "updated" event. Ha a funkció ING-re végződik, akkor a lefutás ELŐTT hajtódik végre.
     */
    public function updating(Game $game): void
    {
        if (auth()->check()) {
            $game->updated_by = auth()->user()->id;
        }
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

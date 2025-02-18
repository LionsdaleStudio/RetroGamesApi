<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->hasUser()) { //Ha van bejelentkezett USER
            if (auth()->user()->can('viewAny', Game::class)) { //És engedély
                $games = Game::all();
                return view('games.index', ["games" => $games]);
            }
        }
        else {
            abort(403); //Forbidden error
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGameRequest $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGameRequest $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        //
    }
}

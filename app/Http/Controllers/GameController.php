<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->check()) { //Ha van bejelentkezett USER
            if (auth()->user()->can('viewAny', Game::class)) { //És engedély
                $games = Game::all();
                return view('games.index', ["games" => $games]);
            }
        } else {
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
         if ($request->hasFile('picture') && $request->file('picture')->isValid()) {
            $path = $request->file('picture')->store('img', 'public');
            $filename = explode('/', $path)[1];

            $newGame = new Game($request->all());
            $newGame->picture = $filename;
            $newGame->save();

            return redirect(route('games.index'))->with('msg', "{$newGame->name} was added successfully.");
        } else {
            return "There was an error with your upload, please try again.";
        }  

        /* Ha valamikor a privát mappába töltesz fel dolgokat és onnan kell kiszedni */
        /* if ($request->hasFile('picture') && $request->file('picture')->isValid()) {
            $path = $request->file('picture')->store();

            echo "File mentve ezen a néven: {$path}";

            Storage::path($path);

            if (Storage::exists($path)) {
                echo "Ez a fájl létezik.";
                return Storage::download($path);
            }

            $newGame = new Game($request->all());
            $newGame->picture = $path;
            $newGame->save();

            return redirect(route('games.index'))->with('msg', "{$newGame->name} was added successfully.");
        } else {
            return "There was an error with your upload, please try again.";
        } */
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

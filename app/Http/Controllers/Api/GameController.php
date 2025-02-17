<?php

namespace App\Http\Controllers\Api;

use App\Models\Game; //modell
use App\Http\Requests\StoreGameRequest; //Request objektum (authentikáció és authorization)

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index() {
        $games = Game::all();
        return response()->json([$games, "msg" => "Request successfull"]);
    }

    public function store(StoreGameRequest $request)
    {
        $newGame = Game::create($request->all());
        return response()->json([$newGame, "msg"=> "{$newGame->name} was added successfully."]);
    }
}

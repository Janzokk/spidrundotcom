<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function show()
    {
        $games = Game::getGameNames();

        return view('games', ['games' => $games]);
    }

    public function showRuns($title){
        $runs = Game::getRuns($title);

        return view('runs', ['runs' => $runs]);
    }

    public function showUserRuns($title, $user){
        $runs = Game::getUserRuns($title, $user);

        return view('runs', ['runs' => $runs]);
    }

}
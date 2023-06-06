<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Game extends Model
{
    private static function makeRequest($url)
    {

        $response = Http::get("http://192.168.1.82:5000/$url");
        return $response->json();
    }

    public static function getRuns($title)
    {
        return self::makeRequest("game/{$title}");
    }

    public static function getUserRuns($title, $user){
        return self::makeRequest("game/{$title}/{$user}");
    }
    
    public static function getGameNames()
    {
        return self::makeRequest("game");
    }
}
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/game', 'App\Http\Controllers\GameController@show')->name('games');
Route::get('/game/{title}', 'App\Http\Controllers\GameController@showRuns')->name('runs');
Route::get('/game/{title}/{user}', 'App\Http\Controllers\GameController@showUserRuns')->name('userRuns');


Route::get('/', function () {
    return view('home');
})->name('home');

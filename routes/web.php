<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoGames;
use App\Http\Controllers\DetailVideogames;

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



Route::get('/', [Videogames::class, 'index'] )->name('Videogames');

Route::get("/detail/{name}", [DetailVideogames::class, 'details'])->name("game.detail");


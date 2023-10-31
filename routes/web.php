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

Route::get('/', function () {
    
    return view('index');
});

Route::get('/Games', function(){
    $videogames = [
        ["name" => "Final Fantasy VII Rebirth", "prezzo" => "80,98€", "Genere" => "Action/Adventure"],
        ["name" => "Fifa 24", "prezzo" => "69,98€", "Genere" => "Sport"],
        ["name" => "Call of Duty", "prezzo" => "100€", "Genere" => "Spara Tutto"],
        ["name" => "Rachet & Clank", "prezzo" => "50,45€", "Genere" => "Fantasy/Adventure"],
        ["name" => "Spiderman 2", "prezzo" => "79,99€", "Genere" => "Supereroi"]
    ];
    return view('Games', ['videogames'=>$videogames]);
})->name('Videogames');


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoGames extends Controller
{
    public function index(){
        $videogames = [
            ["name" => "Final Fantasy VII Rebirth", "prezzo" => "80,98€", "Genere" => "Action/Adventure", "description" => "Final Fantasy VII è un gioco di ruolo basato sostanzialmente sui menu. All'inizio il giocatore ha accesso solo alla città di Midgar, ma più il gioco procede più il mondo fantasy diviene disponibile, e le sequenze di avventure prestabilite cedono gradualmente il passo a maggiori libertà e possibilità di esplorazione."],
            ["name" => "Fifa 24", "prezzo" => "69,98€", "Genere" => "Sport", "description" => "EA SPORTS FC ™ 24 ti dà il benvenuto a The World's Game: l'esperienza calcistica più realistica di sempre con HyperMotionV*, PlayStyles ottimizzati da Opta e un rivoluzionario motore Frostbite ™ che reinventa il modo in cui oltre 19.000 giocatori autentici si muovono, giocano e guardano in ogni partita ."],
            ["name" => "Call of Duty", "prezzo" => "100€", "Genere" => "Spara Tutto", "description" => "Call of Duty è uno sparatutto in prima persona ambientato in alcuni campi di battaglia della seconda guerra mondiale dove il giocatore è messo nei panni di un soldato statunitense, uno britannico ed uno sovietico impiegati nel combattimento contro il nemico comune, i tedeschi."],
            ["name" => "Rachet & Clank", "prezzo" => "50,45€", "Genere" => "Fantasy/Adventure", "description" => "Ratchet & Clank è una serie di videogiochi di avventura e sparatutto in piattaforma 3D e modalità terza persona. È stata sviluppata da Insomniac Games, High Impact Games, Handheld Games e Darkside Game Studios e pubblicata da Sony Computer Entertainment. Ratchet & Clank nasce nel 2002 con il primo episodio."],
            ["name" => "Spiderman 2", "prezzo" => "79,99€", "Genere" => "Supereroi", "description" => "Spider-Man 2 è un avventura dinamica a giocatore singolo in terza persona. Come il precedente capitolo e Miles Morales, Parker e Morales sono i due protagonisti, diventando giocabili individualmente a seconda della storia mentre attraversano una New York open world e combattono nemici."]
        ];
        return view('index', ['videogames'=>$videogames]);
    }
}

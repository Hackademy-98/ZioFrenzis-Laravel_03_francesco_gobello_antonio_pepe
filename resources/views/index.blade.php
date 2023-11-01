<x-layout>

    <div class="container">
        <div class="row  justify-content-center">
            @foreach ($videogames as $game)
            <div class="col-12 col-md-3 m-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $game["name"] }}</h5>
                        <p></p>
                        <p class="card-text">{{$game["prezzo"]}}</p>
                        <a href="{{route('game.detail',['name'=>$game['name']])}}" class="btn btn-primary">Scopri di piu'</a>
                    </div>
                </div>
                
            </div>
            @endforeach
        </div>
    </div>

    
    
</x-layout>
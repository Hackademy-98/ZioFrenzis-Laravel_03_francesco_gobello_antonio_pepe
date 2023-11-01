<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 ">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $games["name"] }}</h5>
                        <p></p>
                        <p class="card-text">{{ $games["prezzo"]}}</p>
                        <a href="#" class="btn btn-primary">Scopri di piu'</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</x-layout>
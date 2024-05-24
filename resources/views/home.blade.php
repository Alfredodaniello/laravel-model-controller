@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center">ECCO I TUOI FILM!</h1>
            @foreach ($movies as $movie)
                <div class="col-3">
                    <div class="card my-3" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Titolo: {{$movie->title}}</h5>
                          <h6 class="card-subtitle mb-2 text-body-secondary">Titolo originale: {{$movie->original_title}}</h6>
                          <div>Nazionalità: {{$movie->nationality}}</div>
                          <div>Voto: {{$movie->vote}}</div>
                        </div>
                      </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
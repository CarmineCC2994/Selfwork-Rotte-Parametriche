
@extends('layouts.app')

@section('content')

<h2>Benvenuto su GameZone!</h2>

<p>
    Il tuo punto di riferimento per news, recensioni
    e curiosità sul mondo dei videogiochi.
</p>

<br>

<h2>🔥 Videogiochi in evidenza</h2>

<div class="giochi">

    @foreach($giochi as $gioco)

        <div class="card">

            <img src="{{ $gioco['immagine'] }}" alt="{{ $gioco['titolo'] }}">

            <h3>{{ $gioco['titolo'] }}</h3>

            <p>{{ $gioco['genere'] }}</p>

            <a class="btn"
               href="{{ route('articoli.dettaglio', ['id' => $gioco['id']]) }}">
                Scopri di più
            </a>

        </div>

    @endforeach

</div>

@endsection
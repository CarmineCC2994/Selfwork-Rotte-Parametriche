
@extends('layouts.app')

@section('content')

<h2>Tutti i videogiochi</h2>

<div class="giochi">

    @foreach($giochi as $gioco)

        <div class="card">

            <img src="{{ $gioco['immagine'] }}" alt="{{ $gioco['titolo'] }}">

            <h3>{{ $gioco['titolo'] }}</h3>

            <p>Genere: {{ $gioco['genere'] }}</p>

            <p>Piattaforme: {{ $gioco['piattaforma'] }}</p>

            <a class="btn"
               href="{{ route('articoli.dettaglio', ['id' => $gioco['id']]) }}">
                Leggi articolo
            </a>

        </div>

    @endforeach

</div>

@endsection


@extends('layouts.app')

@section('content')

<h2>{{ $gioco['titolo'] }}</h2>

<div class="card">

    <img src="{{ $gioco['immagine'] }}"
         alt="{{ $gioco['titolo'] }}"
         style="height:300px;">

    <h3>Informazioni sul videogioco</h3>

    <p><strong>Genere:</strong> {{ $gioco['genere'] }}</p>

    <p><strong>Piattaforme:</strong> {{ $gioco['piattaforma'] }}</p>

    <p><strong>Descrizione:</strong> {{ $gioco['descrizione'] }}</p>

</div>

<a href="{{ route('articoli') }}" class="btn">
    Torna agli articoli
</a>

@endsection

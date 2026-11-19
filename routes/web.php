<?php

use Illuminate\Support\Facades\Route;

$giochi = [
    [
        'id' => 1,
        'titolo' => 'Grand Theft Auto VI',
        'genere' => 'Action / Open World',
        'piattaforma' => 'PS5, Xbox Series X/S',
        'descrizione' => 'Il nuovo capitolo della celebre saga Rockstar Games.',
        'immagine' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxXu9ewObZAmVqTRx-foUcqJxwKwjVsJvt3gwd8yhkrg&s'
    ],
    [
        'id' => 2,
        'titolo' => 'The Legend of Zelda: Ocarina of Time',
        'genere' => 'Action Adventure',
        'piattaforma' => 'Nintendo 64',
        'descrizione' => 'Un capolavoro senza tempo che ha fatto la storia dei videogiochi.',
        'immagine' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaGcb0-meTRMJyhOQnvc_-1Hi_zNBfySLcLu6t4oPz2A&s=10'
    ],
    [
        'id' => 3,
        'titolo' => 'Elden Ring',
        'genere' => 'Action RPG',
        'piattaforma' => 'PC, PS5, Xbox',
        'descrizione' => 'Un\'avventura fantasy ricca di sfide e misteri.',
        'immagine' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWk9NacV1sBqNJUk5WrWuFlI93T_lqbxajO3QTdiVMiQ&s=10'
    ],
    [
        'id' => 4,
        'titolo' => 'Minecraft',
        'genere' => 'Sandbox',
        'piattaforma' => 'PC, Console, Mobile',
        'descrizione' => 'Costruisci, esplora e sopravvivi in un mondo infinito.',
        'immagine' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIMdkewbfqqzz1mxM-m0Du3Yj7FusWZUN-oj0Wroiiwg&s=10'
    ]
];

Route::get('/', function () use ($giochi) {
    return view('home', compact('giochi'));
})->name('home');

Route::get('/chi-siamo', function () {
    return view('chi-siamo');
})->name('chi-siamo');

Route::get('/servizi', function () {
    return view('servizi');
})->name('servizi');

Route::get('/articoli', function () use ($giochi) {
    return view('articoli', compact('giochi'));
})->name('articoli');

Route::get('/articoli/{id}', function ($id) use ($giochi) {

    $gioco = collect($giochi)->firstWhere('id', $id);

    if (!$gioco) {
        abort(404);
    }

    return view('dettaglio', compact('gioco'));

})->name('articoli.dettaglio');
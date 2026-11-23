<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})-> name('homepage');

Route::get('/chi-siamo', function () {
    $users = [ ['name'=>'Nino','surname'=>'Frassica','role'=>'Senior Manager'],
    ['name'=>'Federico','surname'=>'Lucia','role'=>'HR'],
    ['name'=>'Walter','surname'=>'Mazzarri','role'=>'Developer']];
    return view('about-us', ['users' => $users]);
})-> name('aboutUs');

Route::get('/chi-siamo/detail/{name}', function($name){
     $users = [ ['name'=>'Nino','surname'=>'Frassica','role'=>'Senior Manager'],
    ['name'=>'Federico','surname'=>'Lucia','role'=>'HR'],
    ['name'=>'Walter','surname'=>'Mazzarri','role'=>'Developer']];
  foreach($users as $user){
if($name == $user["name"]){
    return view('about-us-detail', ['user'=>$user]);
}

  }


})-> name('aboutUsDetail');



Route::get('/contatti', function () {
    return view('contacts');
})-> name('contacts');

Route::get('/games', function(){
    $games = [
        ['id' => '1', 'title' => 'The Legend of Zelda Ocarina of Time', 'director' => 'Eiji Aonuma', 'img' => '/media/Zelda.jpg', 'genres' => 'action-adventure'],
        ['id' => '2', 'title' => 'Grand Theft Auto VI', 'director' => 'Sam Houser', 'img' => '/media/GTA.jpg', 'genres' => 'action-adventure'],
        ['id' => '3', 'title' => 'Resident Evil Requiem', 'director' => 'Koshi Nakanishi', 'img' => '/media/RER.jpg', 'genres' => 'survival horror'],
        ['id' => '4', 'title' => 'Phantom Blade Zero', 'director' => 'Qiwei Soulframe Liang', 'img' => '/media/Phantom.jpg', 'genres' => ' GDR'],
        ['id' => '5', 'title' => 'Control Resonant', 'director' => 'Mikael Kasurinen ', 'img' => '/media/control.jpg', 'genres' => "action RPG open world"],
        ['id' => '6', 'title' => '007 First Light', 'director' => ' Hakan Abrak', 'img' => '/media/seven.jpg', 'genres' => "action-adventure"]
    ];
    return view('game.games', ['games'=>$games]);
})-> name('game.list');

Route::get('/game/detail/{id}', function($id){
    $games = [
        ['id' => '1', 'title' => 'The Legend of Zelda Ocarina of Time', 'director' => 'Eiji Aonuma', 'img' => '/media/Zelda.jpg', 'genres' => 'action-adventure'],
        ['id' => '2', 'title' => 'Grand Theft Auto VI', 'director' => 'Sam Houser', 'img' => '/media/GTA.jpg', 'genres' => 'action-adventure'],
        ['id' => '3', 'title' => 'Resident Evil Requiem', 'director' => 'Koshi Nakanishi', 'img' => '/media/RER.jpg', 'genres' => 'survival horror'],
        ['id' => '4', 'title' => 'Phantom Blade Zero', 'director' => 'Qiwei Soulframe Liang', 'img' => '/media/Phantom.jpg', 'genres' => ' GDR'],
        ['id' => '5', 'title' => 'Control Resonant', 'director' => 'Mikael Kasurinen ', 'img' => '/media/control.jpg', 'genres' => "action RPG open world"],
        ['id' => '6', 'title' => '007 First Light', 'director' => ' Hakan Abrak', 'img' => '/media/seven.jpg', 'genres' => "action-adventure"]
    ];
     foreach($games as $game){
if($id == $game['id']){
    return view('game.detail', ['game'=>$game]);
    }
     }
})-> name('game.detail');


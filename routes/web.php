<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('comics');
        return view('home', ['comics' => $comics]);
});

Route::get('/comic', function () {
    $comics = config('comics'); 
    foreach ($comics as $key => $comic) {
       return view('comic', ['key' => $key], ['comics' => $comics]);  
    }     
}); 
<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('strona_glowna');
});

Route::get('/witaj', function () {
    return "Witaj w aplikacji!";
});

Route::get('/test', [TestController::class, 'index']);

Route::get('/users/{id}', function ($id) {
    return "Witaj uzytkowniku o id: $id";
});

Route::get('/photo/{city?}/{street?}', function ($city = null, $street = "main") {
    if (is_null($city)) {
        
        return "o jest zdjęcie bez podanego miasta zrobione na ulicy {$street}.";
        
    }
    return "To jest zdjęcie z {$city} zrobione na ulicy {$street}.";
});

Route::get('/bryla/{height}/{width}/{depth}', function ($height, $width, $depth) {
    $pojemnosc = $height * $width * $depth;
    $data = [
        'height' => $height,
        'width' => $width,
        'depth' => $depth,
        'pojemnosc' => $pojemnosc
    ];
    return view('bryla', $data);
});


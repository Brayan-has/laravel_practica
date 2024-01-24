<?php

use Illuminate\Support\Facades\Route;

/*
Para acceder a una ruta dentro de una sub carpeta
en laravel no se usa el / si no que reemplazamos el 
/ por un punto para acceder al archivo directamente. 
Route::view('/',"segunda.sobre");
 
 */

//  Route::view("/","welcome")->name("welcome");

Route::view("/","segunda.sobre")->name("sobre");
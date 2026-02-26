<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/hello', function () {
    return "Hello Laravel!";
});


Route::get('/about', function () {
    return "Nama: Cheren Agata Devona Syallom | NIM: 245150707111057";
});


Route::get('/home', [HomeController::class, 'index']);

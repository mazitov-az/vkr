<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StartController;

Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/start', function () {
//     return view('start');
// })->name('start');

Route::get('/start', [StartController::class, 'start']);

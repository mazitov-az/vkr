<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StartController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/start', function () {
//     return view('start');
// })->name('start');

Route::get('/start', [HomeController::class, 'start'])->name('start');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('index');

Route::get('/home/add', [HomeController::class, 'showAddCableForm'])->name('cable.add');
Route::post('/home', [HomeController::class, 'storeCable'])->name('cable.store');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;

Route::get('/', function () {
    return view('Homepage');
})->name('Homepage'); # Please remember to give your routes the appropriate names specified in the assignment description (hint: use ->name('ROUTE_NAME') like seen here)

Route::get('/create', [PetController::class, 'create'])->name('Formpage');
Route::post('/create', [PetController::class, 'store'])->name('pets.store');

Route::get('/Listpage', [PetController::class, 'index'])->name('Listpage');
Route::delete('/pets/{id}', [PetController::class, 'remove'])->name('pets.destroy');
Route::get('/pets/{id}', [PetController::class, 'show'])->name('pets.show');

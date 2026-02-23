<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');

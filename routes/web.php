<?php

// use App\Http\Controllers\UserController;

use App\Models\Flight;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightsController;

Route::get('/', function () {
    return view('welcome');
});




Route::get('hi', function () {
    return "welcome";
});

Route::get('yourname/{name}', function ($name) {
    return "welcome" . " " . $name;
});

Route::get('login', function () {
    return view('login');
});

Route::get('flights',[FlightsController::class,'index']) ->name('flights');

Route::get('create_flights',[FlightsController::class,'create'])->name('create_flights');
Route::post('store_flight',[FlightsController::class,'store'])->name('store_flight');
Route::get('edit_flights/{id}',[FlightsController::class,'edit'])->name('edit_flights');
<?php

// use App\Http\Controllers\UserController;

use App\Models\Flight;
use Illuminate\Support\Facades\Route;

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

Route::get('flights', function () {
    return Flight::all();
});
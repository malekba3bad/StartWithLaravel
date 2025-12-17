<?php

// use App\Http\Controllers\UserController;

use App\Models\Flight;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoursesController;

Route::get('/', [HomeController::class, 'index'])->name('home');




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
Route::post('update_flights/{id}',[FlightsController::class,'update_flights'])->name('update_flights');
Route::get('delete_flights/{id}',[FlightsController::class,'delete'])->name('delete_flights');
Route::get('delete_soft/{id}',[FlightsController::class,'delete_soft'])->name('delete_soft');
Route::get('restore/{id}',[FlightsController::class,'restore'])->name('restore');

//Setup Courses Routes
Route::get('courses', [CoursesController::class, 'index'])->name('courses.index ');
Route::get('create_courses', [CoursesController::class, 'create'])->name('courses.create');
Route::post('store_courses', [CoursesController::class, 'store'])->name('courses.store');




Route::resource('country', CountriesController::class);

route::fallback(function(){
    return "this page not found 404";
});
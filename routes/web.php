<?php

// use App\Http\Controllers\UserController;

use App\Models\Flight;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Training_coursesController;

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
Route::get('courses', [CoursesController::class, 'index'])->name('courses.index');
Route::get('create_courses', [CoursesController::class, 'create'])->name('courses.create');
Route::post('store_courses', [CoursesController::class, 'store'])->name('courses.store');
Route::get('edit_courses/{id}', [CoursesController::class, 'edit'])->name('courses.edit');
Route::post('update_courses/{id}', [CoursesController::class, 'update'])->name('courses.update');
Route::get('delete_courses/{id}', [CoursesController::class, 'destroy'])->name('courses.destroy');

//Setup Students Routes
Route::get('student', [StudentController::class, 'index'])->name('student.index');
Route::get('create_student', [StudentController::class, 'create'])->name('student.create');
Route::post('store_student', [StudentController::class, 'store'])->name('student.store');
Route::get('edit_student/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('update_student/{id}', [StudentController::class, 'update'])->name('student.update');
Route::get('delete_student/{id}', [StudentController::class, 'destroy'])->name('student.destroy');

//Setup training_courses Routes
Route::get('training_courses', [Training_coursesController::class, 'index'])->name('training_courses.index');
Route::get('create_training_courses', [Training_coursesController::class, 'create'])->name('training_courses.create');
Route::post('store_training_courses', [Training_coursesController::class, 'store'])->name('training_courses.store');
Route::get('edit_training_courses/{id}', [Training_coursesController::class, 'edit'])->name('training_courses.edit');
Route::post('update_training_courses/{id}', [Training_coursesController::class, 'update'])->name('training_courses.update');
Route::get('delete_training_courses/{id}', [Training_coursesController::class, 'destroy'])->name('training_courses.destroy');

Route::resource('country', CountriesController::class);

route::fallback(function(){
    return "this page not found 404";
});
<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('asd', [UserController::class, 'asd1']);
Route::get('age', [UserController::class, 'age2']);
Route::get('login', [UserController::class, 'get_login']);


Route::get('login1', function () {
    return view('loginPages.login', ['name' => 'atef']);
});




Route::fallback(function () {
    return "this page not found 404";
});


Route::get('/atef/{age?}/{name?}', function ($age=34, $name="sameh") {
    return "my age is : " . $age . " and my name is : " . $name;
}) ->where('age', '[0-9]+')->where('name', '[A-Za-z]+');


Route::prefix('country')->group(function () {
   Route::get('name/{name}', function ($name) {
       return "country name is : " . $name;
   });
    Route::get('code/{code}', function ($code) {
         return "country code is : " . $code;
    });
});

Route::get('main', function () {
    return view('master');
});
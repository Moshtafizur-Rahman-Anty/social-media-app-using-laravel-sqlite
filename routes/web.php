<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\userController;

Route::get('/', [userController::class, "showCorrectHomepage"]);
Route::get('/about-us', [ExampleController::class, "aboutPage"]);
Route::get('/single-post', [ExampleController::class, "singlePost"]);




Route::post('/register', [userController::class, "register"]);
Route::post('/login', [userController::class, "login"]);
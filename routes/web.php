<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/{vue_capture?}', function () {
   return view('welcome');
})->where('vue_capture', '[\/\w\.-]*');


// Route::post('/user-registration', [UserController::class, 'UserRegistration']);
// Route::get('/user-login', [UserController::class, 'UserLogin']);

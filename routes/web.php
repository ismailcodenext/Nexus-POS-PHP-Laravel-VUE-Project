<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


//Route::get('/{vue_capture?}', function () {
//    return view('welcome');
//})->where('vue_capture', '[\/\w\.-]*');

Route::view('/', 'user-page.registration');
Route::view('/registration', 'user-page.registration');
Route::view('/nexus-login-page', 'user-page.login-form');


Route::post('/user-registration', [UserController::class, 'UserRegistration']);
Route::get('/user-login', [UserController::class, 'UserLogin']);

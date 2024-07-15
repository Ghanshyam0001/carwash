<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WashplanController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
// http://127.0.0.1:8000/api/register

Route::post('password/email',[HomeController::class,'sendResetlinkemail']);







<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('home');
});

Route::post('/register', [UserController::class, 'register']); // Using functions
                                                                            // This function is found in UserController archive
                                                                            // For use this function u need import the class,
                                                                            // But using right click, u import automatically...
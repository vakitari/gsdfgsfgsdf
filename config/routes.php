<?php

use App\Controllers\HomeController;
use App\Controllers\AuthController;
use App\Controllers\PoliseController;
use App\Controllers\UserController;
use App\Kernel\Router\Route;

return[
    Route::get('/bas/home', [HomeController::class, 'index']),
    Route::get('/bas/register', [AuthController::class, 'register']),
    Route::get('/bas/login', [AuthController::class, 'login']),
    Route::get('/bas/polise', [PoliseController::class, 'index']),
    Route::post('/bas/register', [UserController::class, 'index']),
];
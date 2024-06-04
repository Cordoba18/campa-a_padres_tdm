<?php

use Illuminate\Support\Facades\Route;


 use App\Http\Controllers\UserController;






    Route::get('/', [UserController::class, 'index'])->name('home');


    Route::get('/show', [UserController::class, 'show'])->name('home.show');

    Route::get('/export', [UserController::class, 'export'])->name('home.export');

    Route::post('/save', [UserController::class, 'save'])->name('user.save');

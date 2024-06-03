<?php

use Illuminate\Support\Facades\Route;


 use App\Http\Controllers\UserController;






    Route::get('/', [UserController::class, 'index'])->name('home');


    // Route::post('/dashboard/users/profile/edit_profile/save_changes', [UsersController::class, 'save_changes'])->name('dashboard.users.save_changes');

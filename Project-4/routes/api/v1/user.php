<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::middleware(['auth:sanctum','is_admin'])->group(function () {
Route::get('/users',[UserController::class,'index'])->name('users');
Route::get('/users/create',[UserController::class,'create']);
Route::post('/users',[UserController::class,'store']);
Route::get('/users/{id}/edit', [UserController::class, 'edit']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::DELETE('/users/{id}', [UserController::class, 'destroy']);

});

Route::middleware(['auth:sanctum','is_user'])->group(function () {
    Route::get('/user',[UserController::class,'show']);
    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
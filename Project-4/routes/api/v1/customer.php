<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::middleware(['auth:sanctum','is_user'])->group(function () {
Route::get('/customers/create',[CustomerController::class,'create'])->name('Customers');
Route::post('/customers',[CustomerController::class,'store']);
Route::get('/customers/{id}/edit', [CustomerController::class, 'edit']);
Route::put('/customers/{id}', [CustomerController::class, 'update']);
Route::DELETE('/customers/{id}', [CustomerController::class, 'destroy']);
Route::get('/customers/{id}', [CustomerController::class ,'show']);
});

Route::get('/customers',[CustomerController::class,'index'])->name('Customers');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
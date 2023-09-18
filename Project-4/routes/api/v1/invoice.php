<?php

use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::middleware(['auth:sanctum','is_user'])->group(function () {
Route::get('/invoices/create',[InvoiceController::class,'create']);
Route::post('/invoices',[InvoiceController::class,'store']);
Route::get('/invoices/{id}/edit', [InvoiceController::class, 'edit']);
Route::put('/invoices/{id}', [InvoiceController::class, 'update']);
Route::DELETE('/invoices/{id}', [InvoiceController::class, 'destroy']);
Route::get('/invoices/{id}', [InvoiceController::class ,'show']);
});

Route::get('/invoices',[InvoiceController::class,'index'])->name('invoices');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::resource("/customers",CustomerController::class);

// Route::resource("/users",UserController::class);

// Route::resource("/invoices",InvoiceController::class);


foreach (glob(__DIR__ . '/api/v1/*.php') as $route) {
    require $route;
}

Route::get('/', function () {
    return view('extra.welcome');
});

Route::post('/users/search', [UserController::class, 'search'])->name('users.search');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

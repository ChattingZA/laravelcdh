<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrinkController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/drinks', [DrinkController::class, 'index']);
Route::get('/reports', [ReportController::class, 'index']);
Route::get('/suppliers', [SupplierController::class, 'index']);
Route::get('/accounts', [AccountController::class, 'index']);
Route::get('/customers', [CustomerController::class, 'index']);

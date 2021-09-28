<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobilController;

Route::view('/', 'index');
Route::view('cars', 'cars');
Route::view('car/FER20213', 'detail');
Route::view('dashboard', 'dashboard.index');
// Route::view('dashboard/cars', 'dashboard.cars');
Route::get('dashboard/cars', [MobilController::class, 'show']);
Route::view('dashboard/cars/create', 'dashboard.createcars');
Route::post('dashboard/cars/store', [MobilController::class, 'store']);
Route::view('dashboard/cars/update', 'dashboard.updatecars');
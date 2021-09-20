<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');
Route::view('cars', 'cars');
Route::view('car/FER20213', 'detail');
Route::view('dashboard', 'dashboard.index');
Route::view('dashboard/cars', 'dashboard.cars');
Route::view('dashboard/cars/create', 'dashboard.createcars');
Route::view('dashboard/cars/update', 'dashboard.updatecars');
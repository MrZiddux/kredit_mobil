<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');
Route::view('dashboard', 'dashboard.index');
Route::view('dashboard/cars', 'dashboard.cars');
Route::view('dashboard/cars/create', 'dashboard.createcars');
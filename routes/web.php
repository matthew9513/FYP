<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('cpu', CPUController::class);

Route::resource('motherboard', MotherboardController::class);

Route::resource('ram', RAMController::class);

Route::resource('casing', CasingController::class);

Route::resource('psu', PSUController::class);

Route::resource('storage', StorageController::class);

Route::resource('gpu', GPUController::class);
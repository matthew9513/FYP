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

//Admin

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::resource('cpu', CPUController::class);

    Route::resource('motherboard', MotherboardController::class);
    
    Route::resource('ram', RAMController::class);
    
    Route::resource('casing', CasingController::class);
    
    Route::resource('psu', PSUController::class);
    
    Route::resource('storage', StorageController::class);
    
    Route::resource('gpu', GPUController::class);
});


Route::resource('budget', BudgetController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/budget', [App\Http\Controllers\BudgetController::class, 'index'])->name('budget');

Route::get('/specific', [App\Http\Controllers\SpecificController::class, 'index'])->name('specific');

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
    Route::resource('cpu', CPUController::class)->except([
        'show'
    ]);

    Route::resource('motherboard', MotherboardController::class)->except([
        'show'
    ]);
    
    Route::resource('ram', RAMController::class)->except([
        'show'
    ]);
    
    Route::resource('casing', CasingController::class)->except([
        'show'
    ]);
    
    Route::resource('psu', PSUController::class)->except([
        'show'
    ]);
    
    Route::resource('storage', StorageController::class)->except([
        'show'
    ]);
    
    Route::resource('gpu', GPUController::class)->except([
        'show'
    ]);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/specific', [App\Http\Controllers\SpecificController::class, 'index'])->name('specific');

Route::resource('budget', BudgetController::class);

Route::resource('cpu', CPUController::class)->only([ 'show']);

Route::resource('motherboard', MotherboardController::class)->only([ 'show']);

Route::resource('ram', RAMController::class)->only([ 'show']);

Route::resource('casing', CasingController::class)->only([ 'show']);

Route::resource('psu', PSUController::class)->only([ 'show']);

Route::resource('storage', StorageController::class)->only([ 'show']);

Route::resource('gpu', GPUController::class)->only([ 'show']);

Route::view('/lowBudget', 'system.lowBudget');

Route::view('/mediumBudget', 'system.mediumBudget');

Route::view('/mediumHighBudget', 'system.mediumHighBudget');

Route::view('/highBudget', 'system.highBudget');

Route::view('/adobe', 'system.adobe');

Route::view('/adobePremiere', 'system.adobePremiere');

Route::view('/valo', 'system.valo');

Route::view('/forza', 'system.forza');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
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

Route::get('/', function () {
    
    return view('welcome');
});

// Route::get('lang/{lang}', 'LocalizationController@switch')->name('localization.switch');
Route::get('lang/{lang}', [LocalizationController::class, 'switch'])->name('localization.switch');
Route::get('/translate/{lang}', [LocalizationController::class, 'switchWithPackage'])->name('localization.switchWithPackage');
 

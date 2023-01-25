<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\InternationalFootballController;
use App\Http\Controllers\NationalFootballController;
use App\Models\NationalFootball;
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

Route::get('/{id?}',[NationalFootballController::class,'index']);

// Route::get('/insert',[NationalFootballController::class,'insertt']);
Route::get('insert/data',[NationalFootballController::class,'insert'])->name('insert.data');
Route::post('/insert-store',[NationalFootballController::class,'store'])->name('insert-store');


Route::get('/categorie/{id?}',[NationalFootballController::class,'categoriepage']);

Route::get('{id?}/search',[NationalFootballController::class,'search']);








<?php

use App\Http\Controllers\ChapitreController;
use App\Http\Controllers\Compte;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Formation;
use App\Http\Controllers\FormationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\TestController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/formation' , FormationController::class );
Route::resource('/module' , ModuleController::class );
Route::resource('/chapitre' , ChapitreController::class);
Route::get('/test', [TestController::class , 'index'])->name('test');
Route::resource('/compte' , Compte::class);
Route::resource('/dashboard' , Dashboard::class);

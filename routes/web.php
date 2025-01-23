<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

//resources
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('regulasi', \App\Http\Controllers\RegulasiController::class);
Route::resource('knowledge', \App\Http\Controllers\PengetahuanController::class);
Route::resource('policy', \App\Http\Controllers\KebijakanController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

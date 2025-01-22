<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\RegulasiController;
use App\Http\Controllers\TataKelolaController;
use App\Models\TataKelola;
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

Route::get('/dashboard',function () {
    return view('dashboard');
    })->name('dashboard');

Route::controller(RegulasiController::class)->prefix('regulasi')->group(function(){
    Route::get('', 'index')->name('regulasi');
    Route::get('create', 'create')->name('regulasi.create');
    Route::post('create', 'store')->name('regulasi.create.store');
    Route::get('edit/{id}', 'edit')->name('regulasi.edit');
    Route::put('update/{id}', 'update')->name('regulasi.update');
});

Route::controller(TataKelolaController::class)->prefix('spbe')->group(function(){
    Route::get('', 'index')->name('spbe');
    Route::get('create', 'create')->name('spbe.create');
    Route::post('create', 'store')->name('spbe.create.store');
    Route::get('edit/{id}', 'edit')->name('spbe.edit');
    Route::put('update/{id}', 'update')->name('spbe.update');
    Route::get('show/{id}', 'show')->name('spbe.show');
});

Route::controller(BeritaController::class)->prefix('berita')->group(function(){
    Route::get('', 'index')->name('berita');
    Route::get('create', 'create')->name('berita.create');
    Route::post('create', 'store')->name('berita.create.store');
    Route::get('edit/{id}', 'edit')->name('berita.edit');
    Route::put('update/{id}', 'update')->name('berita.update');
    Route::get('show/{id}', 'show')->name('berita.show');
});


Route::get('/profile',function () {
    return view('profil');
    })->name('profile');
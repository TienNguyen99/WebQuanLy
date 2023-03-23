<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//
use App\Http\Controllers\ChuyenNganhController;
use App\Http\Controllers\DanQuanController;
use App\Http\Controllers\Tuoi17Controller;
use App\Http\Controllers\ThanhPhanController;

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



Auth::routes();
//admin
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
// Route::get('/dqcd', [App\Http\Controllers\DanQuanController::class, 'index']);
Route::get('/word-export/{id}', [App\Http\Controllers\DanQuanController::class, 'wordExport'])->name('word')->middleware('auth');
Route::get('/word-exporttuoi17/{id}', [App\Http\Controllers\Tuoi17Controller::class, 'wordExporttuoi17'])->name('wordtuoi17')->middleware('auth');
Route::get('updateToggleSwitchStatus', 'DanQuanController@updateToggleSwitchStatus')->middleware('auth');
// Tuổi 17

// Route::get('/tuoi17', 'App\Http\Controllers\Tuoi17Controller@indexTuoi17')->name('tuoi17')->middleware('auth');;

Route::resource('chuyennganh',ChuyenNganhController::class)->middleware('auth');
Route::resource('danquan',DanQuanController::class)->middleware('auth');
Route::resource('tuoi17',Tuoi17Controller::class)->middleware('auth');
Route::resource('thanhphan',ThanhPhanController::class)->middleware('auth');



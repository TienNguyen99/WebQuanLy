<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//
use App\Http\Controllers\ChuyenNganhController;
use App\Http\Controllers\DanQuanController;
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/dqcd', [App\Http\Controllers\DanQuanController::class, 'index']);
Route::get('/word-export/{id}', [App\Http\Controllers\DanQuanController::class, 'wordExport'])->name('word');
Route::get('updateToggleSwitchStatus', 'DanQuanController@updateToggleSwitchStatus');


Route::resource('chuyennganh',ChuyenNganhController::class);
Route::resource('danquan',DanQuanController::class);
Route::resource('thanhphan',ThanhPhanController::class);


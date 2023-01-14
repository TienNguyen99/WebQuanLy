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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('/dqtt', [App\Http\Controllers\DanQuanController::class, 'show_dqtt'])->middleware('auth')->name('dqtt');



Route::resource('chuyennganh',ChuyenNganhController::class)->middleware('auth');
Route::resource('danquan',DanQuanController::class)->middleware('auth');
Route::resource('thanhphan',ThanhPhanController::class)->middleware('auth');


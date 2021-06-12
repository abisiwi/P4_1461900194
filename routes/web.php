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

Route::get('/', [App\Http\Controllers\kegiatan4::class, 'index0194'])->name('index0194');
Route::get('users/export/',[App\Http\Controllers\kegiatan4::class, 'Exports0194'])->name('Exports0194');
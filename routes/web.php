<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register-mbkm', [App\Http\Controllers\RegistermbkmController::class, 'index'])->name('register-mbkm');
Route::post('/save-register', [App\Http\Controllers\RegistermbkmController::class, 'store'])->name('save-register');
Route::get('/submit-file', [App\Http\Controllers\RegistermbkmController::class, 'submitFile'])->name('submit-file');
Route::get('/registration-list', [App\Http\Controllers\Admin\RegistermbkmController::class, 'index'])->name('registration-list');
Route::get('/registration-detail/{id}', [App\Http\Controllers\Admin\RegistermbkmController::class, 'show'])->name('registration-detail');





